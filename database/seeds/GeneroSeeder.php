<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{

    public function run()
    {
        \App\Genero::create(['nombre' => 'Novela']);
        \App\Genero::create(['nombre' => 'Ciencia Ficción']);
        \App\Genero::create(['nombre' => 'Suspenso']);
        \App\Genero::create(['nombre' => 'Anime']);
        \App\Genero::create(['nombre' => 'Super Heroes']);
        \App\Genero::create(['nombre' => 'Manga']);
        \App\Genero::create(['nombre' => 'Romantico']);
        \App\Genero::create(['nombre' => 'Infantil']);
    }
}
