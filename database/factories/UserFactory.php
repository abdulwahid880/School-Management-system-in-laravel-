<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\School;
use App\Section;
use App\Department;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

class UserFactory extends Factory
{
  /**
   * The current password being used by the factory.
   */
  protected static ?string $password;

  public function definition(): array
  {

    return [
        'name'           => fake()->name,
        'email'          => fake()->unique()->safeEmail,
        'password'       => static::$password ??= Hash::make('password'),
        'remember_token' => Str::random(10),
        'active'         => 1,
        'role'           => fake()->randomElement(['student', 'teacher', 'admin', 'accountant', 'librarian']),
        'school_id' =>
      School::count() ? fake()->randomElement(School::pluck('id')->toArray()) : School::factory(1)->create()->id,
        'code' => function () {
          if (School::count())
            return fake()->randomElement(School::pluck('code')->toArray());
          else return School::factory(1)->create()->code;
        },
        'student_code'   => fake()->unique()->randomNumber(7, false),
        'address'        => fake()->address,
        'about'          => fake()->sentences(3, true),
        'pic_path'       => fake()->imageUrl(640, 480),
        'phone_number'   => fake()->unique()->phoneNumber,
        'verified'       => 1,
        'section_id' => function (){
          if (Section::count())
            return fake()->randomElement(Section::pluck('id')->toArray());
          else return Section::factory(1)->create()->id;
        },
        'department_id' => function (){
          if (Department::count())
            return fake()->randomElement(Department::pluck('id')->toArray());
          else return Department::factory(1)->create()->id;
        },
        'blood_group'    => fake()->randomElement(['a+', 'b+', 'ab', 'o+']),
        'nationality'    => 'Bangladeshi',
        'gender'         => fake()->randomElement(['male', 'female']),
    ];
  }

  public function role($role): Factory 
  {
    return $this->state(function (array $attributes) use ($role) {
      return [
        'role' => $role,
      ];
    });
  }
}

