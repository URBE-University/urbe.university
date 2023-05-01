<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sentence = $this->faker->sentence;
        return [
            'name' => $sentence,
            'slug' => str($sentence)->slug(),
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->dateTime,
            'featured_image' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
        ];
    }
}
