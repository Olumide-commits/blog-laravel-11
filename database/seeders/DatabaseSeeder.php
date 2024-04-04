<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Database\Factories\ProductTagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Tag::factory(5)->create();
        Color::factory(5)->create();
        Product::factory(10)->create();

        $tags = Tag::all();
        $colors = Color::all();

        Product::all()->each(function (Product $product) use ($tags, $colors) {
            $product->tags()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray()
            );
            $product->colors()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
