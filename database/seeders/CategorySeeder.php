<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::factory()->create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);

        Category::factory()->create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::factory()->create([
            'name' => 'Data Structure',
            'slug' => 'data-structure'
        ]);
    }
}
