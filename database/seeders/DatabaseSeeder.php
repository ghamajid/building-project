<?php

namespace Database\Seeders;

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
       /* \App\Models\User::factory(10)->create();*/

        \App\Models\User::factory()->create([
            'name' => 'majid',
            'email' => 'test@example.com',
            'username' => 'ghamajid',
            'contact' => '1234567890',
            'status' => 1,
            'password' => Hash::make('123456789'),
        ]);
    }
}
