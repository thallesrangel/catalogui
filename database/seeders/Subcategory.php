<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subcategory extends Seeder
{
    public function run()
    {
        DB::table('subcategory_announcement')->insert([
            ['id' => 1, 'category_id' => 1, 'name' => 'Imobiliadora'],
            ['id' => 2, 'category_id' => 1, 'name' => 'Material de Construção'],
            ['id' => 3, 'category_id' => 2, 'name' => 'Academia'],      
        ]);
    }
}