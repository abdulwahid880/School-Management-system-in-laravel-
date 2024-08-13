<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Myclass;

class SectionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'section_number' => fake()->randomElement(['A', 'B','C','D','E','F','G','H','I','J','K','L','M']),
            'room_number'    => fake()->randomDigitNotNull,
            'class_id'       => function() {
                if (Myclass::count())
                    return fake()->randomElement(Myclass::pluck('id')->toArray());
                else return Myclass::factory(1)->create()->id;
            },
        ];
    }
}
