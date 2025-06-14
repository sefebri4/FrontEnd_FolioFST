<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data berita yang ada
        Berita::truncate();

        // Buat 20 berita baru
        Berita::factory()->count(20)->create();
    }
}
