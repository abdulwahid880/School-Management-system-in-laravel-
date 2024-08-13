<?php

namespace Database\Seeders;
use App\Notice;
use Illuminate\Database\Seeder;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::factory(50)->create();
    }
}
