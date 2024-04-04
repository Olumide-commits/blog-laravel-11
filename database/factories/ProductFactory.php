<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->slug(),
            'description' => $this->faker->unique()->paragraph(2),
            'content' => $this->faker->unique()->paragraph(5),
            'preview_image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(10, 1000),
            'count' => $this->faker->numberBetween(10, 100),
            'category_id' => Category::factory(),
        ];
    }
}
