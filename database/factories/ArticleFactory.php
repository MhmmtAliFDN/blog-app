<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $collection = collect([1,2,3,4,5]);
        $title = fake()->text();

        return [
            'category_id' => $collection->random(),
            'user_id' => $collection->random(),
            'title' => $title,
            'slug' => Str::slug($title),
            'summary' => fake()->text(),
            'content' => fake()->text(),
            'photo' => null,
        ];
    }
}
