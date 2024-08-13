<?php

namespace Database\Seeders;

use App\Account;
use Illuminate\Database\Seeder;

class AccountSectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::factory(50)->create();
    }
}
