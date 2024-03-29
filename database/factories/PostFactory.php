<?php

namespace Database\Factories;

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
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(mt_rand(2,3)),
            'excerpt' => $this->faker->paragraph(mt_rand(2,5)),
            'body' => $this->faker->paragraph(mt_rand(5,9))
        ];
    }
}
