<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;

class NotificationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sent_status' => fake()->randomElement([0, 1]),
            'active'      => fake()->randomElement([0, 1]),
            'message'     => fake()->sentences(3, true),
            'student_id'  => fake()->randomElement(User::student()->pluck('id')->toArray()),
            'user_id'     => function() {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
