<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\User;
use App\Exam;
use App\School;
use App\Section;

class AttendanceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'present'    => fake()->randomElement([0,1,2]),
            'student_id' => function () {
                if (User::student()->count())
                    return fake()->randomElement(User::student()->take(10)->pluck('id')->toArray());
                else return User::factory(1)->create(['role' => 'student'])->id;
            },
            'section_id' => function () {
                if (Section::count())
                    return fake()->randomElement(Section::pluck('id')->toArray());
                else return Section::factory(1)->create()->id;
            },
            'exam_id'    => function () {
                if (Exam::count())
                    return fake()->randomElement(Exam::bySchool(fake()->randomElement(School::pluck('id')->toArray()))->pluck('id')->toArray());
                else return Exam::factory(1)->create()->id;
            },
            'user_id'    => function () {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
