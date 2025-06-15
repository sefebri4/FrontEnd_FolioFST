<?php

namespace Database\Seeders;

use App\Models\Proyek;
use Illuminate\Database\Seeder;

class ProyekSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data proyek yang ada
        Proyek::truncate();

        // Buat 20 proyek baru
        Proyek::factory()->count(20)->create();
    }
}
