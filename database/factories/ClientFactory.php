<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Client;
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
            'name' => $this->faker->name('nome falso'),
            'email' => $this->faker->name('email falso'),
            'phone' => $this->faker->name('número de telefone falso'),
            'id_number' =>  $this->faker->id('uuid falso'),
        ];
    }
}