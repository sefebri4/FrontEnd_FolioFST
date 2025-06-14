<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data prestasi yang ada
        Prestasi::truncate();

        // Buat 20 prestasi baru
        Prestasi::factory()->count(20)->create();
    }
}
