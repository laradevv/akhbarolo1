<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'title' => $this->faker->text(25),
            'text' => $this->faker->text(),
            'image' => $this->faker->image(),
        ];
    }
}
