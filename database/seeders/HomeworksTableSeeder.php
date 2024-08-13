<?php

namespace Database\Seeders;

use App\Homework;
use Illuminate\Database\Seeder;

class HomeworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homework::factory(50)->create();
    }
}
