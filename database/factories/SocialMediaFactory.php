<?php

namespace Database\Factories;

use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SocialMedia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'red' => $this->faker->word,
            'url' => $this->faker->url,
        ];
    }
}
