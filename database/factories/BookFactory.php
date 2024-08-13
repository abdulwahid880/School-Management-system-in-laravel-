<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\School;
use App\Myclass;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'book_code' => 'bk'.fake()->unique()->randomNumber(7, false),
            'title'     => fake()->sentences(1, true),
            'author'    => fake()->name,
            'quantity'  => fake()->randomElement([5,8,19,13,34]),
            'rackNo'    => fake()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12]),
            'rowNo'     => fake()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12]),
            'type'      => fake()->randomElement(['Academic','Magazine','Story','Other']),
            'img_path'  => fake()->imageUrl($width = 150, $height = 150, 'cats'),
            'about'     => fake()->sentences(3, true),
            'price'     => fake()->randomNumber,
            'class_id'  => function() {
                                if (Myclass::count() > 0) {
                                    return fake()->randomElement(Myclass::pluck('id')->toArray());
                                } else return Myclass::factory(1)->create()->id;
                            },
            'school_id'  => function() {
                                if (School::count() > 0) {
                                    return fake()->randomElement(School::pluck('id')->toArray());
                                } else return School::factory(1)->create()->id;
                            },
            'user_id'   => function() {
                                if (User::where('role','librarian')->count() > 0) {
                                    return fake()->randomElement(User::where('role','librarian')->pluck('id')->toArray());
                                } else
                                    return User::factory(1)->role('librarian')->create()->id;
                            }
        ];
    }
}
