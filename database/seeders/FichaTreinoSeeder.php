<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treino;

class TreinoSeeder extends Seeder
{
    public function run(): void
    {
        $dados = [
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

        foreach ($dados as $dia => $exercicios) {
            foreach ($exercicios as $exercicio) {
                Treino::create([
                    'dia' => $dia,
                    'grupo' => $exercicio['grupo'],
                    'exercicio' => $exercicio['exercicio'],
                    'series' => $exercicio['series'],
                    'reps' => $exercicio['reps'],
                    'tecnica' => $exercicio['tecnica'],
                ]);
            }
        }
    }
}
