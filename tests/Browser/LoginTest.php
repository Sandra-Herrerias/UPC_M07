<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{

    
    // public function testAuthentication()
    // {
    //     $this->browse(function ($browser) {
    //         $browser->loginAs(User::find(1))
    //               ->visit('/home');
    //     });
    // }

    public function testLogin()
    {
        $user = User::factory()->create([
            'email' => 'cc@laravel.com',
        ]);
 
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
