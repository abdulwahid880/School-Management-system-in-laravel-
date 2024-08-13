<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;

class GradesystemFactory extends Factory
{
    public function definition(): array
    {
    return [
            'grade_system_name' => fake()->randomElement(['Grade System 1','Grade System 2']),
            'grade'             => fake()->randomElement(['A+','A','A-','B+','B','B-','C+','C','C-','D+','D','F']),
            'point'             => fake()->randomElement([2.50,2.75,3.00,3.50,4.00,4.50,5.00]),
            'from_mark'         => fake()->randomElement([0,30,60,70,80,90]),
            'to_mark'           => fake()->randomElement([60,70,80,90,100]),
            'school_id'         => function() {
                if (School::count())
                    return fake()->randomElement(School::pluck('id')->toArray());
                else return School::factory(1)->create()->id;
            },
            'user_id'           => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
