<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;

class FeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fee_name'  => fake()->name,
            'school_id' => function() {
                if (School::count())
                    return fake()->randomElement(School::pluck('id')->toArray());
                else return School::factory(1)->create()->id;
            },
            'user_id'   => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}

// 'admission_fee'    => fake()->randomNumber,
// 'tution_fee'       => fake()->randomNumber,
// 'fine_fee'         => fake()->randomNumber,
// 'exam_fee'         => fake()->randomNumber,
// 'registration_fee' => fake()->randomNumber,
// 'library_fee'      => fake()->randomNumber,
// 'lab_fee'          => fake()->randomNumber,
// 'sport_fee'        => fake()->randomNumber,
// 'late_payment_fee' => fake()->randomNumber,
// 'maintenance_fee'  => fake()->randomNumber,
// 'internet_fee'     => fake()->randomNumber,
// 'farewell_fee'     => fake()->randomNumber,
// 'other_fee'        => fake()->randomNumber,
