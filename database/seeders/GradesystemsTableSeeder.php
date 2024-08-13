<?php

namespace Database\Seeders;

use App\Gradesystem;
use Illuminate\Database\Seeder;

class GradesystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gradesystem::factory(2)->create();
    }
}
