<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan ini

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'John Doe', 'email' => 'john@example.com']);
        User::create(['name' => 'Jane Smith', 'email' => 'jane@example.com']);
    }
}
