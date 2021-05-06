<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class RevTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::factory(10)->create();
    }
}
