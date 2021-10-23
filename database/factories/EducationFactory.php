<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'degree' => $this->faker->name,
            'school_name' => $this->faker->name,
            'start_date' => $this->faker->date,
            'finish_date' => $this->faker->date,
            'description' => $this->faker->text,
            'user_id'=> rand(1,5)
        ];
    }
}
