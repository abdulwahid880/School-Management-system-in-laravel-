<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Exam;
use App\Myclass;

class ExamForClassFactory extends Factory
{
    public function definition(): array
    {
        return [
            'class_id' => fake()->randomElement(Myclass::pluck('id')->toArray()),
            'exam_id'  => fake()->randomElement(Exam::where('active', 1)->pluck('id')->toArray()),
            'active'   => fake()->randomElement([0, 1]),
        ];
    }
}
