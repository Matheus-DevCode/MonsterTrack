<?php

namespace App\Models\Regras;

use App\Models\Facade\DadosTreino;
use App\Models\Facade\GeradorDePdf;
use App\Models\Facade\MenuButtons;
use App\Models\Services\TelegramService;
use Illuminate\Contracts\Container\BindingResolutionException;
use JsonException;

class DadosRecebido
{
    /**
     * @throws JsonException
     * @throws BindingResolutionException
     */
    public static function RespostaBot($chatId, $text, $callbackQuery = null): void
    {
        if ($text === '/start') {
            TelegramService::SendMessage(
                $chatId,
                MenuButtons::GetWelcomeMessage(),
                MenuButtons::GetMenuPrincipal()
            );
            return;
        }

        if ($callbackQuery) {
            switch ($callbackQuery) {
                case 'ver_treino':
                    TelegramService::SendMessage(
                        $chatId,
                        "Escolha o formato que deseja visualizar o treino",
                        MenuButtons::GetFormatoTreinoMenu(),
                    );
                    break;

                case 'desempenho_treino':
                    TelegramService::SendMessage(
                        $chatId,
                        "Selecione o dia da semana para ver o desempenho:",
                        MenuButtons::GetMenuDesempenhosPorDia(),
                    );
                    break;

                case 'desempenho_segunda':
                    $pdf = GeradorDePdf::gerarPdfDesempenhoSegunda(DadosTreino::desempenhoSegunda());
                    TelegramService::sendDocument($chatId, $pdf);
                    break;

                case 'desempenho_terca':
                    $pdf = GeradorDePdf::gerarPdfDesempenhoTerca(DadosTreino::desempenhoTerca());
                    TelegramService::sendDocument($chatId, $pdf);
                    break;

                case 'treino_pdf':
                    $pathPdf = GeradorDePdf::gerarPdf(DadosTreino::treinoExemplo());
                    TelegramService::sendDocument($chatId, $pathPdf);
                    break;
            }
        }
    }
}
