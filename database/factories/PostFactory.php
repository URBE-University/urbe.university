<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'slug' => str($this->faker->sentence)->slug(),
            'excerpt' => $this->faker->paragraph,
            'content' => $this->faker->paragraph,
            'featured_image' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'featured_image_alt_text' => $this->faker->sentence,
            'keyphrases' => $this->faker->sentence,
            'enable_comments' => $this->faker->boolean(),
            'published_at' => '2023-01-30 00:00:00'
        ];
    }
}
