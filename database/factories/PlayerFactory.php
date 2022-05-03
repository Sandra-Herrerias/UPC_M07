<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nickname'=> $this->faker->unique()->name,
            'email' => $this->faker->unique()->email(),
            'password' =>  $this->faker->password(),
            'role' =>  $this->faker->randomElement(['admin', 'player'])
        ];
    }
}
