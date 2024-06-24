<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Daftar;
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
        

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('admin'),
        ]);
        // User::factory(4)->create();
        // Daftar::factory()->count(50)->create();
    }
}
