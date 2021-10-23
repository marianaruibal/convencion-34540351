<?php

namespace Database\Factories;

use App\Models\ProfessionalSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionalSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalSkill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'user_id' => rand(1,5),
            'p_skill' => $this->faker->word,
            'percent'=> rand(1,99)

        ];
    }
}
