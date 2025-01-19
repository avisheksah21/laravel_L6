<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Random product title
            'description' => $this->faker->paragraph, // Random product description
            'image' => 'images/book.jpeg',
            'price' => $this->faker->randomFloat(2, 10, 100), // Random price between 10 and 100
            'category_id' => $this->faker->numberBetween(12, 36), // Random category ID
            'quantity' => $this->faker->numberBetween(1, 100), // Random quantity between 1 and 100
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
