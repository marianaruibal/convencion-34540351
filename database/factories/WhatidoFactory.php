<?php

namespace Database\Factories;

use App\Models\Whatido;
use Illuminate\Database\Eloquent\Factories\Factory;

class WhatidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Whatido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'description'=>$this->faker->text,
            'user_id'=> rand(1,5)
        ];
    }
}
