<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\User;
use App\School;
use App\Myclass;

class SyllabusFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_path'   => fake()->url,
            'description' => fake()->sentences(3, true),
            'title'       => fake()->sentences(1, true),
            'active'      => fake()->randomElement([0, 1]),
            'school_id'   => School::count() ? fake()->randomElement(School::pluck('id')->toArray()) : School::factory(1)->create()->id,
            'class_id' => function() {
                if (Myclass::count())
                    return fake()->randomElement(Myclass::pluck('id')->toArray());
                else return Myclass::factory(1)->create()->id;
            },
            'user_id'  => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
