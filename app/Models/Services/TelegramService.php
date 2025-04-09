<?php

namespace App\Models\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use JsonException;

class TelegramService
{
    private static function getToken(): string
    {
        return config('monstertrack.token_telegram');
    }

    /**
     * Envia uma mensagem para o Telegram com ou sem botões.
     *
     * @throws JsonException
     */
    public static function sendMessage(int $chatId, string $text, array $buttons = []): void
    {
        $token = self::getToken();
        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $data = [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'Markdown',
        ];

        if (!empty($buttons)) {
            $data['reply_markup'] = json_encode([
                'inline_keyboard' => array_map(static fn($btn) => [$btn], $buttons)
            ], JSON_THROW_ON_ERROR);
        }

        try {
            $response = Http::timeout(10)->post($url, $data);

            if (!$response->successful()) {
                Log::error('Erro ao enviar mensagem para Telegram', [
                    'chat_id' => $chatId,
                    'response' => $response->json(),
                    'text' => $text,
                ]);
            } else {
                Log::info('✅ Mensagem enviada para Telegram com sucesso', [
                    'chat_id' => $chatId,
                    'text' => $text,
                ]);
            }
        } catch (Exception $e) {
            Log::error("❌ Exceção ao enviar mensagem Telegram: {$e->getMessage()}");
        }
    }

    /**
     * Envia um documento (PDF) para o Telegram.
     * @throws JsonException
     */
    public static function sendDocument(int $chatId, string $filePath): void
    {
        $token = self::getToken();
        $url = "https://api.telegram.org/bot{$token}/sendDocument";

        if (!file_exists($filePath)) {
            Log::error("❌ Arquivo não encontrado: $filePath");
            self::sendMessage($chatId, "❗ O arquivo não foi encontrado para envio.");
            return;
        }

        if (filesize($filePath) > 20 * 1024 * 1024) {
            Log::warning("⚠️ Arquivo muito grande para envio: $filePath");
            self::sendMessage($chatId, "❗ O arquivo é muito grande para ser enviado pelo Telegram.");
            return;
        }

        try {
            $response = Http::timeout(60)
                ->attach('document', file_get_contents($filePath), basename($filePath))
                ->post($url, [
                    'chat_id' => $chatId,
                ]);

            if (!$response->successful()) {
                Log::error("Erro ao enviar documento Telegram", [
                    'chat_id' => $chatId,
                    'response' => $response->json(),
                    'filePath' => $filePath
                ]);
                self::sendMessage($chatId, "❌ Ocorreu um erro ao enviar o documento. Tente novamente.");
            } else {
                Log::info("📄 Documento enviado com sucesso para Telegram", [
                    'chat_id' => $chatId,
                    'file' => basename($filePath),
                ]);
            }
        } catch (Exception $e) {
            Log::error("❌ Exceção ao enviar documento Telegram: {$e->getMessage()}");
            self::sendMessage($chatId, "⚠️ Não foi possível enviar o documento. Tente novamente mais tarde.");
        }
    }
}
