<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(),
            'content'=>$this->faker->paragraph(3, true),
            'image'=>$this->faker->imageUrl(640, 480, 'posts', true),
            'author_name'=>$this->faker->name(),
            'category'=>$this->faker->word(),
            'published_at'=>$this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
