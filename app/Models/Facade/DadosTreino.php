<?php

namespace App\Models\Facade;

class DadosTreino
{
    public static function treinoExemplo(): array
    {
        return [
            'Segunda-feira – Costas + Bíceps' => [
                ['grupo' => 'Costas', 'exercicio' => 'Levantamento Terra', 'series' => 3, 'reps' => '6-8', 'tecnica' => 'Última série até a falha técnica'],
                ['grupo' => 'Costas', 'exercicio' => 'Polia Alta', 'series' => 3, 'reps' => '8-10', 'tecnica' => 'Rest-pause (15s entre falhas)'],
                ['grupo' => 'Costas', 'exercicio' => 'Remada Curvada', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Contração máxima em cada rep'],
                ['grupo' => 'Costas', 'exercicio' => 'Puxada Neutra Polia', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Drop-set na última série'],
                ['grupo' => 'Bíceps', 'exercicio' => 'Rosca Direta com Barra', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Isometria de 2s no pico'],
                ['grupo' => 'Bíceps', 'exercicio' => 'Rosca Alternada', 'series' => 2, 'reps' => '12-15', 'tecnica' => '2 reps forçadas no final'],
            ],
            'Terça-feira – Posterior de Coxa + Glúteo + Panturrilha' => [
                ['grupo' => 'Posterior', 'exercicio' => 'Mesa Flexora', 'series' => 3, 'reps' => '15', 'tecnica' => 'Contração + 1s de isometria'],
                ['grupo' => 'Posterior', 'exercicio' => 'Stiff com Halteres', 'series' => 2, 'reps' => '10-12', 'tecnica' => 'Falha mecânica'],
                ['grupo' => 'Posterior', 'exercicio' => 'Avanço com Passada Longa', 'series' => 3, 'reps' => '12(cada)', 'tecnica' => 'Pausa de 1s no fundo'],
                ['grupo' => 'Glúteo', 'exercicio' => 'Cadeira Abdutora', 'series' => 3, 'reps' => '12-15', 'tecnica' => 'Drop-set pesado na última série'],
                ['grupo' => 'Panturrilha', 'exercicio' => 'Gêmeos Sentado', 'series' => 3, 'reps' => '20', 'tecnica' => 'Rest-pause + isometria final'],
                ['grupo' => 'Panturrilha', 'exercicio' => 'Gêmeos em Pé', 'series' => 3, 'reps' => '20', 'tecnica' => 'Pico de contração em cada rep'],
            ],
            'Quarta-feira – Peito + Tríceps + Abdômen' => [
                ['grupo' => 'Peito', 'exercicio' => 'Supino Reto com Barra', 'series' => 3, 'reps' => '6-8', 'tecnica' => 'Rest-pause'],
                ['grupo' => 'Peito', 'exercicio' => 'Supino Inclinado com Halteres', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Excêntrica de 3s'],
                ['grupo' => 'Peito', 'exercicio' => 'Crucifixo na Máquina', 'series' => 2, 'reps' => '15', 'tecnica' => 'Dropset'],
                ['grupo' => 'Tríceps', 'exercicio' => 'Tríceps Corda na Polia', 'series' => 3, 'reps' => '12', 'tecnica' => 'Reps lentas e controladas'],
                ['grupo' => 'Tríceps', 'exercicio' => 'Tríceps Testa', 'series' => 3, 'reps' => '10', 'tecnica' => 'Falha + 2 forçadas'],
                ['grupo' => 'Abdômen', 'exercicio' => 'Elevação de Pernas Suspenso', 'series' => 3, 'reps' => '15', 'tecnica' => 'Execução rígida, sem balanço'],
                ['grupo' => 'Abdômen', 'exercicio' => 'Abdominal Infra no Banco', 'series' => 3, 'reps' => '20', 'tecnica' => 'Bi-set com prancha (30s)'],
            ],
            'Quinta-feira – Costas (ênfase largura) + Ombros' => [
                ['grupo' => 'Costas', 'exercicio' => 'Barra Fixa (pegada aberta)', 'series' => 3, 'reps' => '6-8', 'tecnica' => 'Rest-pause'],
                ['grupo' => 'Costas', 'exercicio' => 'Puxada Alta na Polia', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Contração máxima (1s no final)'],
                ['grupo' => 'Costas', 'exercicio' => 'Remada Cavalinho', 'series' => 3, 'reps' => '8-10', 'tecnica' => 'Pico de contração'],
                ['grupo' => 'Ombros', 'exercicio' => 'Desenvolvimento com Halteres', 'series' => 3, 'reps' => '12-15', 'tecnica' => 'Última série até falha'],
                ['grupo' => 'Ombros', 'exercicio' => 'Elevação lateral', 'series' => 3, 'reps' => '12-15', 'tecnica' => 'Drop-set triplo'],
                ['grupo' => 'Ombros', 'exercicio' => 'Face Pull', 'series' => 3, 'reps' => '15-20', 'tecnica' => 'Isometria no pico'],
            ],
            'Sexta-feira – Posterior + Quadríceps + Antebraço' => [
                ['grupo' => 'Pernas', 'exercicio' => 'Agachamento Livre', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Rest-pause'],
                ['grupo' => 'Perna', 'exercicio' => 'Cadeira Adutora', 'series' => 3, 'reps' => '10-12', 'tecnica' => 'Falha'],
                ['grupo' => 'Quadríceps', 'exercicio' => 'Cadeira Extensora', 'series' => 3, 'reps' => '8-10', 'tecnica' => 'Controle excêntrico'],
                ['grupo' => 'Posterior', 'exercicio' => 'Mesa flexora unilateral', 'series' => 3, 'reps' => '12-15', 'tecnica' => 'Contração máxima em cada rep'],
                ['grupo' => 'Quadríceps', 'exercicio' => 'Leg Press', 'series' => 3, 'reps' => '12-15', 'tecnica' => 'Alongue bem'],
                ['grupo' => 'Posterior', 'exercicio' => 'Stiff Leve (alongamento)', 'series' => 3, 'reps' => '12-15', 'tecnica' => 'Fluxo contínuo, sem travar no topo'],
            ],
            'Sábado – Antebraço (Ênfase em Força Neural)' => [
                ['grupo' => 'Antebraço', 'exercicio' => 'Encolhimento com Barra Pesada', 'series' => 4, 'reps' => '6-8', 'tecnica' => 'Descanso longo (2-3min)'],
                ['grupo' => 'Antebraço', 'exercicio' => 'Rosca Invertida com Barra W', 'series' => 3, 'reps' => '8-10', 'tecnica' => 'Excêntrica controlada'],
                ['grupo' => 'Antebraço', 'exercicio' => 'Rosca de Punho (Wrist Curl)', 'series' => 3, 'reps' => '10', 'tecnica' => '2s de isometria no topo'],
                ['grupo' => 'Antebraço', 'exercicio' => 'Farmer’s Walk (parado)', 'series' => 3, 'reps' => '30s', 'tecnica' => 'Carga alta, foco total na pegada'],
                ['grupo' => 'Antebraço', 'exercicio' => 'Hang Isométrico na Barra Fixa', 'series' => 3, 'reps' => 'até a falha', 'tecnica' => 'Pendurado com peso corporal'],
            ],
        ];
    }

    public static function desempenhoSegunda(): array
    {
        return [
            'Levantamento Terra' => [
                'series' => [
                    ['Série' => '1', 'Tipo' => 'Aquecimento', 'Carga' => '25kg', '% Carga' => '40%', 'Reps' => '—'],
                    ['Série' => '2', 'Tipo' => 'Aquecimento', 'Carga' => '35kg', '% Carga' => '60%', 'Reps' => '—'],
                    ['Série' => '3', 'Tipo' => 'Valendo', 'Carga' => '60kg', '% Carga' => '100%', 'Reps' => '5'],
                    ['Série' => '4', 'Tipo' => 'Valendo', 'Carga' => '60kg', '% Carga' => '100%', 'Reps' => '5'],
                ],
                'sugestao' => "Se as 3 séries com 120kg saíram com boa forma:\n• Tentar 6 reps.\n• Se subir bem, aumentar pra 125kg na próxima.",
            ],
            'Puxada Articulada' => [
                'series' => [
                    ['Série' => '1', 'Tipo' => 'Valendo', 'Carga' => '30kg', 'Reps' => '10', 'Obs' => 'Principal'],
                    ['Série' => '1.1', 'Tipo' => 'Rest-Pause', 'Carga' => '30kg', 'Reps' => '10', 'Obs' => 'Após 15s'],
                    ['Série' => '2', 'Tipo' => 'Valendo', 'Carga' => '40kg', 'Reps' => '10', 'Obs' => 'Principal'],
                    ['Série' => '2.1', 'Tipo' => 'Rest-Pause', 'Carga' => '40kg', 'Reps' => '10', 'Obs' => 'Após 15s'],
                    ['Série' => '3', 'Tipo' => 'Valendo', 'Carga' => '60kg', 'Reps' => '10', 'Obs' => 'Principal'],
                    ['Série' => '3.1', 'Tipo' => 'Rest-Pause', 'Carga' => '60kg', 'Reps' => '6', 'Obs' => 'Após 15s'],
                    ['Série' => '4', 'Tipo' => 'Valendo', 'Carga' => '70kg', 'Reps' => '8', 'Obs' => 'Principal'],
                    ['Série' => '4.1', 'Tipo' => 'Rest-Pause', 'Carga' => '60kg', 'Reps' => '4', 'Obs' => 'Drop para finalizar'],
                ],
                'sugestao' => "Manter 70kg e tentar 10 + 6 reps. Se fácil, subir pra 75kg."
            ],
            'Remada Curvada' => [
                'series' => [
                    ['Série' => '1', 'Tipo' => 'Valendo', 'Carga' => '20kg', 'Reps' => '8'],
                    ['Série' => '2', 'Tipo' => 'Valendo', 'Carga' => '20kg', 'Reps' => '8'],
                    ['Série' => '3', 'Tipo' => 'Valendo', 'Carga' => '20kg', 'Reps' => '10'],
                ],
                'sugestao' => "Tentar 3x10 com os mesmos 20kg. Se for tranquilo, subir pra 22kg por lado."
            ],
            'Puxada Alta (pegada neutra)' => [
                'series' => [
                    ['Série' => '1', 'Tipo' => 'Valendo', 'Carga' => '50kg', 'Reps' => '8', 'Obs' => 'Polia Alta'],
                    ['Série' => '2', 'Tipo' => 'Valendo', 'Carga' => '50kg', 'Reps' => '10', 'Obs' => 'Polia Alta'],
                    ['Série' => '3', 'Tipo' => 'Valendo', 'Carga' => '50kg', 'Reps' => '10', 'Obs' => 'Polia Alta'],
                    ['Série' => '3.1', 'Tipo' => 'Drop', 'Carga' => '15kg', 'Reps' => '11', 'Obs' => 'Placa única'],
                ],
                'sugestao' => "Subir pra 55kg e tentar mesmas reps (8-10). Manter o drop."
            ],
            'Rosca Direta (Barra W)' => [
                'series' => [
                    ['Série' => '1', 'Tipo' => 'Valendo', 'Carga' => '5kg', 'Reps' => '11'],
                    ['Série' => '2', 'Tipo' => 'Valendo', 'Carga' => '7,5kg', 'Reps' => '12'],
                    ['Série' => '3', 'Tipo' => 'Valendo', 'Carga' => '10kg', 'Reps' => '10'],
                ],
                'sugestao' => "Tentar 3x12 com 10kg. Se conseguir, subir pra 12,5kg."
            ],
            'Rosca Alternada' => [
                'series' => [
                    ['Série' => '1', 'Tipo' => 'Valendo', 'Carga' => '14kg', 'Reps' => '10', 'Obs' => 'Halter-14'],
                    ['Série' => '2', 'Tipo' => 'Valendo', 'Carga' => '14kg', 'Reps' => '14', 'Obs' => 'Halter-14'],
                    ['Série' => '3', 'Tipo' => 'Valendo', 'Carga' => '14kg', 'Reps' => '14', 'Obs' => 'Halter-14'],
                ],
                'sugestao' => "Subir pra 16kg e ver quantas reps saem. Tenta 3x10 com 16kg. Se ficar pesado demais, mantém 14kg e tenta 3x15."
            ]
        ];
    }

    public static function desempenhoTerca(): array
    {
        return [
            'Mesa Flexora' => [
                'series' => [
                    ['Série' => '1', 'Carga' => '15kg', 'Reps' => '12', 'Obs' => 'Aquecimento'],
                    ['Série' => '2', 'Carga' => '25kg', 'Reps' => '10', 'Obs' => 'Aquecimento'],
                    ['Série' => '3', 'Carga' => '30kg', 'Reps' => '15', 'Obs' => 'Série valendo'],
                    ['Série' => '4', 'Carga' => '30kg', 'Reps' => '10', 'Obs' => 'Série valendo'],
                ],
                'sugestao' => "Manter 30kg e tentar 3x15. Se fácil, subir para 35kg com o mesmo controle."
            ],
            'Stiff com Halteres' => [
                'series' => [
                    ['Série' => '1', 'Carga' => '24kg (2x)', 'Reps' => '12', 'Obs' => 'Série valendo'],
                    ['Série' => '2', 'Carga' => '24kg (2x)', 'Reps' => '12', 'Obs' => 'Série valendo'],
                    ['Série' => '3', 'Carga' => '28kg (2x)', 'Reps' => '12', 'Obs' => 'Série valendo'],
                ],
                'sugestao' => "Tentar iniciar direto com 28kg e avaliar se mantém reps. Se fácil, subir para 30kg."
            ],
            'Avanço com Halteres' => [
                'series' => [
                    ['Série' => '1', 'Carga' => '28kg (2x)', 'Reps' => '12', 'Obs' => 'Série valendo'],
                    ['Série' => '2', 'Carga' => '28kg (2x)', 'Reps' => '10', 'Obs' => 'Série valendo'],
                    ['Série' => '3', 'Carga' => '28kg (2x)', 'Reps' => '8', 'Obs' => 'Série valendo'],
                ],
                'sugestao' => "Tentar manter as 3 séries com 10-12 reps. Se não atingir, reduzir para 26kg e focar execução."
            ],
            'Cadeira Abdutora' => [
                'series' => [
                    ['Série' => '1', 'Carga' => '35kg', 'Reps' => '12', 'Obs' => 'Série valendo'],
                    ['Série' => '2', 'Carga' => '50kg', 'Reps' => '15', 'Obs' => 'Série valendo'],
                    ['Série' => '3A', 'Carga' => '60kg', 'Reps' => '12', 'Obs' => 'Série valendo (drop)'],
                    ['Série' => '3B', 'Carga' => '30kg', 'Reps' => '24', 'Obs' => 'Drop set'],
                ],
                'sugestao' => "Subir a carga da série principal para 65kg e manter o drop com 30kg."
            ],
            'Panturrilha no Smith' => [
                'series' => [
                    ['Série' => '1', 'Carga' => '40kg', 'Reps' => '18', 'Obs' => '2x20kg (total)'],
                    ['Série' => '2', 'Carga' => '40kg', 'Reps' => '20', 'Obs' => '2x20kg (total)'],
                    ['Série' => '3', 'Carga' => '40kg', 'Reps' => '20', 'Obs' => '2x20kg (total)'],
                ],
                'sugestao' => "Se fácil, subir para 50kg mantendo foco no alongamento e pico."
            ],
            'Panturrilha no Banco Solear' => [
                'series' => [
                    ['Série' => '1', 'Carga' => '30kg', 'Reps' => '20 + 10', 'Obs' => 'Rest-pause + isometria de 5s na 10ª rep'],
                    ['Série' => '2', 'Carga' => '30kg', 'Reps' => '20 + 10', 'Obs' => 'Rest-pause + isometria de 5s na 10ª rep'],
                    ['Série' => '3', 'Carga' => '30kg', 'Reps' => '20 + 10', 'Obs' => 'Rest-pause + isometria de 5s na 10ª rep'],
                ],
                'sugestao' => "Manter padrão e tentar reduzir descanso entre os blocos ou subir para 35kg."
            ],
        ];
    }
}
