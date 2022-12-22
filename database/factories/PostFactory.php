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
            //
            'post_name' => fake() -> word(),
            'post_content' => fake() -> text($maxNbChars = 500),
            'user_id' => fake() -> numberBetween($min = 1, $max = 51),
        ];
    }
}
