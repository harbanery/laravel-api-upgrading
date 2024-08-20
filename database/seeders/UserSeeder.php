<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'username' => 'johndoe',
            'phone_number' => '08123456',
            'roles' => 'USER',
            'password' => Hash::make('JohnDoe123'),
        ]);
    }
}
