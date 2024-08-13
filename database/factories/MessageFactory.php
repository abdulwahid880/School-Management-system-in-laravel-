<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Message;
use App\School;
use App\User;

class MessageFactory extends Factory
{
  public function definition(): array
  {
      return [
          'phone_number' => fake()->randomNumber(7, false),
          'email'        => fake()->unique()->safeEmail,
          'message'      => fake()->sentences(3, true),
          'school_id'    => function () {
            if (School::count())
              return fake()->randomElement(School::pluck('id')->toArray());
            else return School::factory(1)->create()->id;
          },
          'user_id'      => function () {
            if (User::count())
              return fake()->randomElement(User::pluck('id')->toArray());
            else return User::factory(1)->create()->id;
          },
      ];
  }
}
