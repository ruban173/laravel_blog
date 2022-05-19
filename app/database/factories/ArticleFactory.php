<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
             'title'=>$this->faker->word,
             'desc'=>$this->faker->realText(400),
            'visit'=>$this->faker->numberBetween(10,100),
            'like'=>$this->faker->numberBetween(10,100),
            'image'=>$this->faker->imageUrl(),

        ];
    }
}
