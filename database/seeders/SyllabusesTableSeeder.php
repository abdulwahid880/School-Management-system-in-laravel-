<?php

namespace Database\Seeders;

use App\Syllabus;
use Illuminate\Database\Seeder;

class SyllabusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Syllabus::factory(50)->create();
    }
}
