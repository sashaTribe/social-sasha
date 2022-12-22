<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserData>
 */
class UserDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => fake()->name(),
            'firstname' => fake()->firstName($gender = 'male'|'female'),
            'surname' => fake()->lastName,
            'password' => fake()->password(),
            'email' => fake()->safeEmail(),
             //stack overflow
            //  
        ];
    }
}
