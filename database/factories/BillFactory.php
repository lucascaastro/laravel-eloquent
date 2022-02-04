<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice' => $this->faker->randomDigit('número de 4 dígitos aleatório'),
            'installment' => $this->faker->randomDigit('número de 1 dígito aleatório'),
            'client_id' => User::factory()->create->id,
            'value' => $this->faker->randomDigit('número de telefone falso'),
            'due_date' =>  $this->faker->name('data entre now e +1 week'),
            'payment_date' =>  $this->faker->name('data entre -1 week e now'),
        ];
    }
}