<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;

class FormFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'      => fake()->name,
            'file_path' => fake()->url,
            'school_id' =>
            School::count() ? fake()->randomElement(School::pluck('id')->toArray()) : School::factory(1)->create()->id,
            'user_id'   => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
