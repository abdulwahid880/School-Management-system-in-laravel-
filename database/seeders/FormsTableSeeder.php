<?php

namespace Database\Seeders;

use App\Form;
use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::factory(50)->create();
    }
}
