<?php

namespace Database\Seeders;

use App\Myclass;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Myclass::factory(13)->create();
    }
}
