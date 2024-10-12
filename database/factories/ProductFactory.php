<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->words(3, true)), // e.g., "Ergonomic Steel Chair"
            'description' => $this->faker->sentence(10),     // e.g., "A durable and stylish chair perfect for offices."
            'price' => $this->faker->randomFloat(2, 10, 500), // Price between 10.00 and 500.00
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
