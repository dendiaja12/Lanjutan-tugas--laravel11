<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cafe;

class CafeSeeder extends Seeder
{
    public function run(): void
    {
        Cafe::create([
            'name' => 'Kedai Kopi Mrot',
            'location' => 'Jl. Bojong Jauh No. 1610, Bandung',
            'open_hours' => '09:00 - 23:00'
        ]);
    }
}

