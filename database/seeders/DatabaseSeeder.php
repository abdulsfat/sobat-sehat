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
        \App\Models\User::factory()->create([
            'name' => 'mas admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_validated' => true,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'mas kontri',
            'email' => 'kontri@example.com',
            'password' => Hash::make('kontri123'),
            'role' => 'kontributor',
        ]);
    }
}


