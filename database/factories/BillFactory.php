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
            'invoice' => $this->faker->randomNumber(4),
            'installment' => $this->faker->randomNumber(1),
            'client_id' => User::factory()->create()->id,
            'value' => $this->faker->randomFloat(NULL, 0, 99),
            'due_date' =>  $this->faker->dateTimeBetween('now', '+1 week', NULL),
            'payment_date' =>  $this->faker->dateTimeBetween('-1 week', 'now', NULL),
        ];
    }
}