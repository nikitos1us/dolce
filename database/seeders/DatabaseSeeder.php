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
        $this->call(StudentTableSeeder::class);
        $this->command->info('Таблица загружена данными!');
        $this->call(RevTableSeeder::class);
        $this->command->info('Таблица загружена данными!');
        // \App\Models\User::factory(10)->create();
    }
}
