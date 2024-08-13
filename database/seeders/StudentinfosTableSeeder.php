<?php

namespace Database\Seeders;
use App\StudentInfo;
use Illuminate\Database\Seeder;

class StudentinfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentInfo::factory(50)->group('without_group')->create();
        StudentInfo::factory(50)->group('without_group')->create();
        StudentInfo::factory(25)->group('science')->create();
        StudentInfo::factory(15)->group('commerce')->create();
        StudentInfo::factory(10)->group('arts')->create();
    }
}
