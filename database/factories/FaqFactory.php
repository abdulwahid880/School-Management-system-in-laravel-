<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;

class FaqFactory extends Factory
{
  public function definition(): array
  {
      return [
          'question' => fake()->sentence(6, true),
          'answer'   => fake()->sentences(3, true),
          'user_id'  => function () {
            if (User::count())
              return fake()->randomElement(User::pluck('id')->toArray());
            else return User::factory(1)->create()->id;
          },
      ];
  }
}
