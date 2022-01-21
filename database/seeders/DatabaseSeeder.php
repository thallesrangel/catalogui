<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // php artisan migrate:refresh --seed
        $this->call(States::class);
        $this->call(City::class);
        $this->call(Category::class);
        $this->call(Subcategory::class);
    }
}
