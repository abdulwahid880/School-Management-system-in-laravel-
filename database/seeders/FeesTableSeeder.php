<?php

namespace Database\Seeders;

use App\Fee;
use Illuminate\Database\Seeder;

class FeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fee::factory(50)->create();
    }
}
