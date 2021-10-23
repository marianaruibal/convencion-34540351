<?php

namespace Database\Factories;

use App\Models\FeaturedPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturedPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeaturedPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->name,
            'date' => $this->faker->date,
            'platform' => $this->faker->name,
            'post' => $this->faker->text,
            'user_id'=> rand(1,5)

        ];
    }
}
