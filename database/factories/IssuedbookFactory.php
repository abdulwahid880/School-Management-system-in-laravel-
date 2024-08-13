<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\Book;
use App\School;

class IssuedbookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'student_code'  => function () {
                if (User::count())
                    return fake()->randomElement(User::pluck('student_code')->toArray());
                else return User::factory(1)->create()->student_code;
            },
            'book_id'       => function () {
                if (Book::count())
                    return fake()->randomElement(Book::pluck('id')->toArray());
                else return Book::factory(1)->create()->id;
            },
            'quantity'      => fake()->randomElement([5,8,19,13,34]),
            'school_id'     => function () {
                if (School::count())
                    return fake()->randomElement(School::pluck('id')->toArray());
                else return School::factory(1)->create()->id;
            },
            'issue_date'    => fake()->date('Y-m-d', 'now'),
            'return_date'   => fake()->date('Y-m-d', 'now'),
            'fine'          => fake()->randomElement([5,8,19,13,34]),
            'borrowed'      => fake()->randomElement([1,0]),
            'user_id'       => function () {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            }
        ];
    }
}
