<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\School;

class MyclassFactory extends Factory
{
    public function definition(): array
    {
        static $class_number = 0;

        return [
            'class_number' => $class_number++, //$faker->randomDigitNotNull,
            'school_id'    => School::count() ? fake()->randomElement(School::pluck('id')->toArray()): School::factory(1)->create()->id,
            'group'        => function() use ($class_number) {
                $element = fake()->randomElement(['science', 'commerce', 'arts']);
                return ($class_number > 8) ? $element : "";
            }
        ];
    }
}
