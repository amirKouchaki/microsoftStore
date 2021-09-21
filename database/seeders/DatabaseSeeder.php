<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['email' => 'test@gmail.com']);
        User::factory()->create([
            'email' => 'test@test.com',
            'password' => Hash::make(12345678),
            'avatar' => 'images/users/avatars/defaults/colorful-default.jpg'
        ]);
    }
}
