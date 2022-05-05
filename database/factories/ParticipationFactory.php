<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Game;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participation>
 */
class ParticipationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idP' => Game::inRandomOrder()->first()->id,
            'idJ' => User::inRandomOrder()->first()->id,
            'position' => $this->faker->numberBetween(1,2)
        ];
    }
}
