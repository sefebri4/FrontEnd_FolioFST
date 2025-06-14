<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data galeri yang ada
        Galeri::truncate();

        // Buat 20 galeri baru
        Galeri::factory()->count(20)->create();
    }
}
