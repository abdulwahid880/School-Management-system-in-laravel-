<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\School;

class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'school_id' => School::count() ? fake()->randomElement(School::pluck('id')->toArray()): School::factory(1)->create()->id,
            'department_name' => fake()->randomElement(['Bangla','English','Math']),
        ];
    }
}
