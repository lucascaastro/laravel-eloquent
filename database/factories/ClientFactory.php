<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
            'email' => $this->faker->sentence(1),
            'phone' => $this->faker->sentence(1),
            'id_number' =>  User::factory()->create()->id,
        ];
    }
}