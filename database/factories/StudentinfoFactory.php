<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;

class StudentinfoFactory extends Factory
{
    public function definition(): array
    {
        return [
        'student_id'           => fake()->randomElement(User::student()->pluck('id')->toArray()),
        'session'              => now()->year,
        'version'              => fake()->randomElement(['bangla', 'english']),
        'group'                => fake()->randomElement(['', 'science', 'commerce', 'arts']),
        'birthday'             => fake()->dateTimeThisCentury->format('Y-m-d'),
        'religion'             => fake()->randomElement(['islam','hinduism','christianism','buddhism','other']),
        'father_name'          => fake()->name,
        'father_phone_number'  => fake()->randomNumber(7, false),
        'father_national_id'   => "SA0218IBYZVZJSEC8536V4XC",
        'father_occupation'    => fake()->jobTitle,
        'father_designation'   => fake()->jobTitle,
        'father_annual_income' => fake()->randomElement([1000000, 500000, 300000, 700000]),
        'mother_name'          => fake()->name,
        'mother_phone_number'  => fake()->randomNumber(7, false),
        'mother_national_id'   => "SA0218IBYZVZJSEC8536V4XC",
        'mother_occupation'    => fake()->jobTitle,
        'mother_designation'   => fake()->jobTitle,
        'mother_annual_income' => fake()->randomElement([1000000, 500000, 300000, 700000]),
        ];
    }

    public function group($group): Factory
    {
        return $this->state(function (array $attributes) use ($group) {
            return [
                'group' => $group,
            ];
        });
    }
}

