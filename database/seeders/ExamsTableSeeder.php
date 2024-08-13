<?php

namespace Database\Seeders;

use App\Exam;
use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::factory(10)->create();
    }
}
