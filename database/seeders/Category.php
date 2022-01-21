<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    public function run()
    {
        DB::table('category_announcement')->insert([
            ['id' => 1, 'name' => 'Habitacional'],
            ['id' => 2, 'name' => 'Saúde'],
            ['id' => 3, 'name' => 'Alimentação'],
            ['id' => 4, 'name' => 'Evento'],
        ]);
    }
}