<?php

namespace Database\Factories;

use App\Models\FeaturedProyect;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturedProyectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeaturedProyect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'branch' => $this->faker->word(),
            'title' => $this->faker->word(),
            'tags' => $this->faker->word(),
            'description' => $this->faker->text,
            'opinion' => $this->faker->text,
            'name' => $this->faker->name,
            'user_id'=> rand(1,5)

        ];
    }
}
