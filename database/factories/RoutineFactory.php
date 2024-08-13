<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;
use App\Section;

class RoutineFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_path'   => fake()->url,
            'title'       => fake()->sentences(1, true),
            'description' => fake()->sentences(3, true),
            'active'      => fake()->randomElement([0, 1]),
            'school_id'   =>
            School::count() ? fake()->randomElement(School::pluck('id')->toArray()) : School::factory(1)->create()->id,
            'section_id' => function() {
                if (Section::count())
                    return fake()->randomElement(Section::pluck('id')->toArray());
                else return Section::factory()->create()->id;
            },
            'user_id'    => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
