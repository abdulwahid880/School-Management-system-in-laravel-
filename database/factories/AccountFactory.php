<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;

class AccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'        => fake()->name,
            'type'        => fake()->randomElement(['income','expense']),
            'amount'      => fake()->randomNumber(4, false),
            'description' => fake()->sentences(3, true),
            'school_id'   => School::count() ? fake()->randomElement(School::pluck('id')->toArray()) : School::factory(1)->create()->id,
            'user_id'     => function() {
                if (User::where('role', 'accountant')->count())
                    return fake()->randomElement(User::where('role', 'accountant')->pluck('id')->toArray());
                else return User::factory()->role('accountant')->create()->id;
            }
        ];
    }
}
