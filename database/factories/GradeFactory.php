<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1001, 51000),
            'subject_id' => rand(1,20),
            'grade_date' => now()->subDays(rand(1, 365*2)),
            'grade' => rand(1, 10)
        ];
    }
}
