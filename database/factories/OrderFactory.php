<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\EnumsOrderStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id_confirmed' => Admin::inRandomOrder()->first()->id,
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'customer_name' => fake()->name(),
            'customer_phone' => fake()->phoneNumber(),
            'ship_to_address' => fake()->address(),
            'total' => fake()->numberBetween(20, 500)*1000,
            'status' => fake()->randomElement(EnumsOrderStatus::cases())->value,
        ];
    }
}
