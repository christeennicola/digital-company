<?php

namespace Database\Factories;

use App\Models\Porto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Porto>
 */
class PortoFactory extends Factory
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
            'category'=>$this->faker->word(),
            'image'=>$this->faker->imageUrl(800, 600, 'business'),
            'link'=>$this->faker->url(),
        ];
    }
}
