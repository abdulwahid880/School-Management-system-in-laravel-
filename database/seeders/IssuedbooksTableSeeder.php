<?php

namespace Database\Seeders;

use App\Issuedbook;
use Illuminate\Database\Seeder;

class IssuedbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Issuedbook::factory(5)->create();
    }
}
