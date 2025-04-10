<?php

namespace App\Models\Services;

class MenuButtons
{
    public static function GetWelcomeMessage(): string
    {
        return "👋 Olá! Bem-vindo ao *MonsterTrack*. Como posso te ajudar hoje?";
    }

    public static function GetMenuPrincipal(): array
    {
        return [
            [
                'text' => "📋 Treino",
                'callback_data' => 'ver_treino'
            ],
            [
                'text' => "Desempenho do Treino",
                'callback_data' => 'desempenho_treino'
            ]
        ];
    }

    public static function GetMenuDesempenhosPorDia(): array
    {
        return [
            [
                'text' => '📅 Segunda-feira',
                'callback_data' => 'desempenho_segunda'
            ],
            [
                'text' => '📅 Terça-feira',
                'callback_data' => 'desempenho_terca'
            ],
            [
                'text' => '📅 Quarta-feira',
                'callback_data' => 'desempenho_quarta'
            ],
            [
                'text' => '📅 Quinta-feira',
                'callback_data' => 'desempenho_quinta'
            ],
            [
                'text' => '📅 Sexta-feira',
                'callback_data' => 'desempenho_sexta'
            ],
            [
                'text' => '📅 Sábado',
                'callback_data' => 'desempenho_sabado'
            ]
        ];
    }

    public static function GetFormatoTreinoMenu(): array
    {
        return [
            [
                'text' => "📝 Baixar PDF",
                'callback_data' => 'treino_pdf'
            ],
        ];
    }
}
