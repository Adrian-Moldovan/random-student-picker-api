<?php

namespace Database\Factories;

use App\Models\CourseParticipant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseParticipant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => 1,
            'student_name' => $this->faker->name()
        ];
    }
}
