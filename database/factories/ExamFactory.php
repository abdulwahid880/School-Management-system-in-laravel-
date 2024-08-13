<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;
use Carbon\Carbon;

class ExamFactory extends Factory
{
    public function definition(): array
    {
        return [
            'exam_name' => fake()->words(3, true),
            'school_id' => function() {
                if (School::count())
                    return fake()->randomElement(School::pluck('id')->toArray());
                else return School::factory(1)->create()->id;
            },
            'term'             => fake()->text(20),
            'active'           => fake()->randomElement([0,1]),
            'start_date'       => fake()->dateTime()->format('Y-m-d H:i:s'),
            'end_date'         => fake()->dateTime()->format('Y-m-d H:i:s'),
            'notice_published' => fake()->randomElement([0,1]),
            'result_published' => fake()->randomElement([0,1]),
            'user_id'          => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
