<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Absen2;

class Absen2Seeder extends Seeder
{
    public function run()
    {
        Absen2::create(['user_id' => 1, 'date' => '2025-04-01', 'status' => true]);
        Absen2::create(['user_id' => 2, 'date' => '2025-04-01', 'status' => false]);
    }
}