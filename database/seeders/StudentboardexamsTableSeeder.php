<?php

namespace Database\Seeders;

use App\StudentBoardExam;
use Illuminate\Database\Seeder;

class StudentboardexamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentBoardExam::factory(200)->create();
    }
}
