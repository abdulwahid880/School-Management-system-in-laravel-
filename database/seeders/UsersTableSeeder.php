<?php

namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => "hasib",
            'email'    => 'hasib@unifiedtransform.com',
            'password' => bcrypt('secret'),
            'role'     => 'master',
            'active'   => 1,
            'verified' => 1,
        ]);

        User::factory(10)->role('admin')->create();
        User::factory(10)->role('accountant')->create();
        User::factory(10)->role('librarian')->create();
        User::factory(30)->role('teacher')->create();
        User::factory(200)->role('student')->create();
    }
}
