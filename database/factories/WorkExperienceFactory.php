<?php

namespace Database\Factories;

use App\Models\WorkExperience;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkExperience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'possition' => $this->faker->name,
            'start_date' => $this->faker->date,
            'finish_date' => $this->faker->date,
            'finish_date' => $this->faker->date,
            'responsability1' => $this->faker->name,
            'responsability2' => $this->faker->name,
            'user_id'=> rand(1,5)
        ];
    }
}
