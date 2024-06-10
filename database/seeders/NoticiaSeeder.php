<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'contenido' => '¡Bienvenidos a el tablón de noticias de la Escuela Infantil Municipal Ángel de la Guarda!',
                'id_escritora' => '1',
            ],
        ]);
    }
}
