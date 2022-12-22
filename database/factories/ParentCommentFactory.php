<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParentComment>
 */
class ParentCommentFactory extends Factory
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
            'user_id' => fake()->numberBetween($min = 1, $max = 51),
            'post_id' => fake()->numberBetween($min = 1, $max = 52),
            'parent_comment' => fake()-> text($maxNbChars = 200),
        ];
    }
}
