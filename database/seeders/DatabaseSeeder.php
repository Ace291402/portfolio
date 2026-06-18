<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@portfolio.test',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create a guest user for testing
        User::factory()->create([
            'name' => 'Guest User',
            'email' => 'guest@portfolio.test',
            'password' => bcrypt('password'),
            'role' => 'guest',
        ]);
    }
}
