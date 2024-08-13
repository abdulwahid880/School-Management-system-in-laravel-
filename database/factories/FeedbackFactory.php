<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;

class FeedbackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => fake()->sentences(3, true),
            'student_id'  => fake()->randomElement(User::student()->pluck('id')->toArray()),
            'teacher_id'  => fake()->randomElement(User::where('role', 'teacher')->pluck('id')->toArray())
        ];
    }
}
