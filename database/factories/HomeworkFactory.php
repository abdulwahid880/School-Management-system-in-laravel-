<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\Section;

class HomeworkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_path'   => fake()->url,
            'description' => fake()->sentences(3, true),
            'teacher_id'  => fake()->randomElement(User::where('role', 'teacher')->pluck('id')->toArray()),
            'section_id'  => fake()->randomElement(Section::pluck('id')->toArray())
        ];
    }
}
