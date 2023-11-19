<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => implode(' ', $this->faker->unique()->words(3)),
            'image' => 'images/image_1.jpg',
            'excerpt' => $this->faker->paragraph(),
            'body' => implode(' ', $this->faker->paragraphs(2)),
            'slug' => $this->faker->unique()->slug()
        ];
    }
}
