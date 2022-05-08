<?php

namespace Tests\Feature;

// use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Database\Eloquent\Factories\Factory;

class UserTest extends TestCase
{

    public function test_go_to_home()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function test_go_to_download()
    {
        $response = $this->get('/download');

        $response->assertStatus(200);
    }

    public function test_go_to_error()
    {
        $response = $this->get('/error');

        $response->assertStatus(404);
    }

    public function test_login_user_doesnt_exists()
    {
        $credentials = [
            "email" => 'testing2@gmail.com',
            "password" => "test"
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('/home');
        $this->assertCredentials($credentials);
    }

    public function test_login()
    {
        $credentials = [
            "email" => 'testing@gmail.com',
            "password" => "test"
        ];

        $response = $this->post('/login', $credentials);
        $response->assertRedirect('/home');
        $this->assertCredentials($credentials);
    }
}
