<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;

class StudentboardexamFactory extends Factory
{
  public function definition(): array
  {
    $student_id =fake()->randomElement(User::student()->pluck('id')->toArray());
    return [
      'student_id'       => $student_id,
      'user_id'          => $student_id,
      'exam_name'        => fake()->randomElement(['JSC','SSC','O Level', 'A Level']),
      'group'            => fake()->randomElement(['science','commerce','arts']),
      'roll'             => fake()->randomNumber(7, false),
      'registration'     => fake()->randomNumber(7, false),
      'session'          => '2018-19',
      'board'            => fake()->randomElement(['dhaka','rajsahi','sylhet']),
      'passing_year'     => 2011,
      'institution_name' => 'efnj school',
      'gpa'              => 5.00,
    ];
}
}
