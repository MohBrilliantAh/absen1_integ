<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create(['name' => 'Mohammad Brilliant', 'email' => 'mb@example.com']);
        User::create(['name' => 'Mohammad Salah', 'email' => 'ms@example.com']);
    }
}