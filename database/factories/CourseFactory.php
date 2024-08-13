<?php
    
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
use App\Exam;
use App\School;
use App\Myclass;
use App\Section;
use App\Gradesystem;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_name' => fake()->words(3, true),
            'class_id'    => function () {
                if (Myclass::count())
                    return fake()->randomElement(Myclass::pluck('id')->toArray());
                else return Myclass::factory(1)->create()->id;
            },
            'course_type' => fake()->randomElement(['Core','Elective']),
            'course_time' => fake()->randomElement(['9:30AM-10:20AM','12:50PM-01:40PM']),
            'school_id'   => function () {
                if (School::count())
                    return fake()->randomElement(School::pluck('id')->toArray());
                else return School::factory(1)->create()->id;
            },
            'teacher_id'  => function () {
                if (User::where('role', 'teacher')->count())
                    return fake()->randomElement(User::where('role', 'teacher')->take(10)->pluck('id')->toArray());
                else return User::factory(1)->create(['role' => 'teacher'])->id;
            },
            'section_id'        => function () {
                if (Section::count())
                    return fake()->randomElement(Section::pluck('id')->toArray());
                else return Section::factory(1)->create()->id;
            },
            'grade_system_name' => function () {
                if (Gradesystem::count())
                    return fake()->randomElement(Gradesystem::pluck('grade_system_name')->toArray());
                else return Gradesystem::factory()->create()->grade_system_name;
            },
            'exam_id'           => function () {
                if (Exam::count())
                    return fake()->randomElement(Exam::pluck('id')->toArray());
                else return Exam::factory(1)->create()->id;
            },
            'quiz_count'         => fake()->randomElement([1,2,3,4,5]),
            'assignment_count'   => fake()->randomElement([1,2,3]),
            'ct_count'           => fake()->randomElement([1,2,3,4,5]),
            'quiz_percent'       => 10,
            'attendance_percent' => 5,
            'assignment_percent' => 15,
            'ct_percent'         => 10,
            'final_exam_percent' => 50,
            'practical_percent'  => 25,
            'att_fullmark'       => 5,
            'quiz_fullmark'      => 15,
            'a_fullmark'         => 20,
            'ct_fullmark'        => 15,
            'final_fullmark'     => 100,
            'practical_fullmark' => 30,
            'user_id' => function () {
                if (User::count())
                    return fake()->randomElement(User::pluck('id')->toArray());
                else return User::factory(1)->create()->id;
            },
        ];
    }
}
