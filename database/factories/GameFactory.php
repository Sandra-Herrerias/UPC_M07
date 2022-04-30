<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'initial_date' => $this->faker->date(),
            'final_date' => $this->faker->date(),
            'duration' => $this->faker->numberBetween(1,40),
        ];
    }
}
