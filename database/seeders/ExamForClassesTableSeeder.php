<?php

namespace Database\Seeders;

use App\ExamForClass;
use Illuminate\Database\Seeder;

class ExamForClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExamForClass::factory(30)->create();
    }
}
