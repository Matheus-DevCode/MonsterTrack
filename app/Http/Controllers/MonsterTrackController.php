<?php

namespace App\Http\Controllers;

use App\Models\Services\DadosRecebido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MonsterTrackController extends Controller
{
    /**
     * Webhook do Telegram.
     *
     */
    public function start(Request $request): void
    {
        try {
            // Pega todos os dados recebidos
            $data = $request->all();

            // Loga os dados recebidos
            Log::channel('telegram')->info('📩 Dados recebidos do Telegram:', ['data' => $data]);

            // Verifica se é mensagem de texto
            if (isset($data['message']['text'])) {
                $chatId = $data['message']['chat']['id'];
                $text = $data['message']['text'];

                Log::channel('telegram')->info('💬 Mensagem de texto recebida', [
                    'chat_id' => $chatId,
                    'text' => $text,
                ]);

                DadosRecebido::RespostaBot($chatId, $text);
            }

            // Verifica se é callback (inline button)
            if (isset($data['callback_query'])) {
                $chatId = $data['callback_query']['message']['chat']['id'];
                $callbackData = $data['callback_query']['data'];

                Log::channel('telegram')->info('🔘 Callback recebido', [
                    'chat_id' => $chatId,
                    'callback_data' => $callbackData,
                ]);

                DadosRecebido::RespostaBot($chatId, '', $callbackData);
            }

        } catch (\Throwable $e) {
            // Loga qualquer erro que acontecer
            Log::channel('telegram')->error('❌ Erro no webhook do Telegram', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
