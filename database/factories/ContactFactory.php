<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'address' => $this->faker->address,
            'country' => $this->faker->country,
            'email' => $this->faker->email,
            'phone' => '+5411542368',
            'user_id'=> rand(1,5),

        ];
    }
}
