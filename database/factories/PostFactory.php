<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            '_id' => Str::uuid(),
            'title' => $title,
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug($title),
            'body' => fake()->realText(300),
        ];
    }
}
