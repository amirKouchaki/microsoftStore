<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Testing\FileFactory;
use Illuminate\Http\UploadedFile;
use JetBrains\PhpStorm\NoReturn;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase,WithFaker;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register_with_default_profile_picture()
    {
        $response = $this->post('/register',$attributes = [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        $this->assertAuthenticated();
        unset($attributes['password_confirmation']);
        unset($attributes['password']);
        $this->assertDatabaseHas('users',$attributes +['avatar' => 'images/users/avatars/defaults/def-pic.png']);
        $response->assertRedirect(route('welcome'));
    }
    public function test_new_users_can_register_with_their_own_picture()
    {
        $this->withoutExceptionHandling();
        $file = UploadedFile::fake()->create('test.png', $kilobytes = 0);
        $response = $this->post('/register',$attributes = [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'avatar' => $file
        ]);
        $this->assertAuthenticated();
        $path = public_path().'/storage/'.auth()->user()->avatar;
        $this->assertFileExists($path);
        $this->remove_stored_dir($path);
        $response->assertRedirect(route('welcome'));
    }
}
