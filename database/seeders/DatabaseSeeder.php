<?php

namespace Database\Seeders;

use App\Models\Reviews;
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
         Reviews::factory(10)->create();
    }
}
