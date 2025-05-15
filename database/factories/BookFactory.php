<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn_code' => fake()->unique()->isbn13(),
            'title' => fake()->unique()->name(),
            'image' => fake()->imageUrl(),
            'quantity' => fake()->numberBetween(100, 200),
            'price' => fake()->numberBetween(20, 500)*1000,
            'description' => fake()->realTextBetween(10, 20),
            'publisher_id' => Publisher::inRandomOrder()->first()->id,
        ];
    }
}
