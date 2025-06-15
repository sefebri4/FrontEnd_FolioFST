<?php

namespace Database\Seeders;

use App\Models\Informasi;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data informasi yang ada
        Informasi::truncate();

        // Buat 20 informasi baru
        Informasi::factory()->count(20)->create();
    }
}
