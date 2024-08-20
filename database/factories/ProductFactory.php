<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ProductCategory;
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
    public function definition(): array
    {
        $product_name = fake()->sentence(2, false);

        return [
            'name' => $product_name,
            'price' => fake()->numberBetween($min = 1500, $max = 6000),
            'categories_id' => ProductCategory::factory(),
            'description' => fake()->text(),
            'tags' => Str::slug($product_name),
        ];
    }
}
