<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RpgFicha;


class RpgFichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RpgFicha::create([
            'jogador' => 'Jogador 1',
            'nome_personagem' => 'Cavaleiro de Astora',
            'raca' => 'Humano',
            'genero' => 'M',
            'classe' => 'Cavaleiro',
            'vigor' => 14,
            'conhecimento' => 10,
            'fortitude' => 11,
            'forca' => 16,
            'destreza' => 12,
            'inteligencia' => 9,
            'fe' => 12,
            'sorte' => 7,
        ]);

        RpgFicha::create([
            'jogador' => 'Jogador 2',
            'nome_personagem' => 'Pyromancer',
            'raca' => 'Humano',
            'genero' => 'F',
            'classe' => 'Piromante',
            'vigor' => 12,
            'conhecimento' => 14,
            'fortitude' => 10,
            'forca' => 12,
            'destreza' => 13,
            'inteligencia' => 14,
            'fe' => 10,
            'sorte' => 8,
        ]);

        RpgFicha::create([
            'jogador' => 'Jogador 3',
            'nome_personagem' => 'Samurai',
            'raca' => 'Humano',
            'genero' => 'M',
            'classe' => 'Samurai',
            'vigor' => 13,
            'conhecimento' => 8,
            'fortitude' => 12,
            'forca' => 14,
            'destreza' => 15,
            'inteligencia' => 10,
            'fe' => 8,
            'sorte' => 10,
        ]);
    }
}
