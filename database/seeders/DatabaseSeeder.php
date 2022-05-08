<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(15)->create();
        // \App\Models\Player::factory(10)->create();
        // \App\Models\Comment::factory(29)->create();
        // \App\Models\Game::factory(15)->create();
        \App\Models\Participation::factory(25)->create();
    }
}
