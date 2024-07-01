<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isFalse;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = fake()->unique()->sentence(rand(1, 2), false);

        return [
            '_id' => Str::uuid(),
            'name' => $category,
            'slug' => Str::slug($category),
        ];
    }
}
