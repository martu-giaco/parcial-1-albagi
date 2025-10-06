<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posteos')->insert([
            [
                'author' => 'mar',
                'title' => 'Primer Posteo',
                'summary' => 'resumen del primer posteo.',
                'content' => 'Contenido del primer posteo.',
                'tags' => json_encode(["primer", "posteo", "omghiii"])
            ],
            [
                'author' => 'abru',
                'title' => 'Segundo Posteo',
                'summary' => 'Resumen del segundo posteo.',
                'content' => 'Contenido del segundo posteo.',
                'tags' => json_encode(["segundo", "posteo", "aveeer"])

            ]
        ]);
    }
}
