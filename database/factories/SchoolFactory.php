<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory 
{
    public function definition(): array
    {
        return [
            'name'        => fake()->name,
            'about'       => fake()->sentences(3, true),
            'medium'      => fake()->randomElement(['bangla', 'english']),
            'code'        => date("y").substr(number_format(time() * mt_rand(),0,'',''),0,6),
            'established' => fake()->name,
            'theme'       => 'flatly',
        ];
    }
}
