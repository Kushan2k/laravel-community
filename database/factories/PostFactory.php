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

            "title"=>$this->faker->sentence(6),
            "content"=>$this->faker->paragraph(5),
            "likes"=>$this->faker->randomNumber(3),
            "tags"=>'tag01,tag02,tag03'
        ];
    }
}
