<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    public function run()
    {
        DB::table('category_announcement')->insert([
            ['id' => 1, 'name' => 'Negócios e Escritório'],
            ['id' => 2, 'name' => 'Autos e Manutenção'],
            ['id' => 3, 'name' => 'Alimentação'],
            ['id' => 4, 'name' => 'Esportes e Lazer'],
            ['id' => 5, 'name' => 'Imóveis'],
            ['id' => 6, 'name' => 'Saúde'],
            ['id' => 7, 'name' => 'Locomação'],
            ['id' => 8, 'name' => 'Agro e Indústria'],
            ['id' => 9, 'name' => 'Educação'],
            ['id' => 10, 'name' => 'Finanças'],
            ['id' => 11, 'name' => 'Moda e Beleza'],
            ['id' => 12, 'name' => 'Eventos'],
            ['id' => 13, 'name' => 'Serviços'],
        ]);
    }
}