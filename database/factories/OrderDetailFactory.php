<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $book = Book::inRandomOrder()->first();
        return [
            'order_id' => Order::inRandomOrder()->first()->id,
            'book_id' => $book->id,
            'quantity' => fake()->numberBetween(1, 10),
            'price' => $book->price,
        ];
    }
}
