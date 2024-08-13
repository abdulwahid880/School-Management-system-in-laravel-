<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Exam;
use App\User;
use App\Course;


class GradeFactory extends Factory
{
  public function definition(): array
  {
      return [
          'gpa'         => fake()->randomNumber(1, false),
          'marks'       => fake()->randomNumber(2, false),
          'attendance'  => 5,
          'quiz1'       => fake()->randomNumber(2, false),
          'quiz2'       => fake()->randomNumber(2, false),
          'quiz3'       => fake()->randomNumber(2, false),
          'quiz4'       => fake()->randomNumber(2, false),
          'quiz5'       => fake()->randomNumber(2, false),
          'ct1'         => fake()->randomNumber(2, false),
          'ct2'         => fake()->randomNumber(2, false),
          'ct3'         => fake()->randomNumber(2, false),
          'ct4'         => fake()->randomNumber(2, false),
          'ct5'         => fake()->randomNumber(2, false),
          'assignment1' => fake()->randomNumber(2, false),
          'assignment2' => fake()->randomNumber(2, false),
          'assignment3' => fake()->randomNumber(2, false),
          'written'     => fake()->randomNumber(2, false),
          'mcq'         => fake()->randomNumber(2, false),
          'practical'   => fake()->randomNumber(2, false),
          'exam_id'     => function () {
            if (Exam::count())
              return fake()->randomElement(Exam::pluck('id')->toArray());
            else return Exam::factory(1)->create()->id;
          },
          'student_id'  => function () {
            if (User::student()->count())
              return fake()->randomElement(User::student()->take(10)->pluck('id')->toArray());
            else return User::factory(1)->create(['role' => 'student'])->id;
          },
          'teacher_id'  => function () {
            if (User::where('role', 'teacher')->count())
              return fake()->randomElement(User::where('role', 'teacher')->take(10)->pluck('id')->toArray());
            else return User::factory(1)->create(['role' => 'teacher'])->id;
          },
          'course_id'   => function () {
            if (Course::count())
              return fake()->randomElement(Course::take(10)->pluck('id')->toArray());
            else return Course::factory(1)->create()->id;
          },
          'user_id'     => function () {
            if (User::count())
              return fake()->randomElement(User::pluck('id')->toArray());
            else return User::factory(1)->create()->id;
          },
      ];
  }
}
