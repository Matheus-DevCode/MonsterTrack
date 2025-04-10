<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserMonsterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_monster')->insert([
            [
                'nome' => 'Matheus Gonçalves Pereira Silva',
                'email' => 'matheus.devcode19@gmail.com',
                'senha' => Hash::make('Mg@06032005'),
                'cpf' => '042.644.882-06',
                'nascimento' => '2005-03-06',
                'telefone' => '(11) 91845-69545',
                'sexo' => 'Masculino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
