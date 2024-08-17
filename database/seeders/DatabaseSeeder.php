<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Raihan Yusuf',
            'email' => 'raihanyusuf@gmail.com',
            'username' => 'raihanyusuf',
            'phone_number' => '085171316106',
            'roles' => 'USER',
            'password' => Hash::make('RaihanYusuf123'),
        ]);
    }
}
