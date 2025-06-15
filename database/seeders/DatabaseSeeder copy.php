<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $this->call([
            UserSeeder::class,
            ProgramStudiSeeder::class,
            DosenSeeder::class,
            DekanSeeder::class,
            KaprodiSeeder::class,
            MahasiswaSeeder::class,
            BeritaSeeder::class,
            GaleriSeeder::class,
            InformasiSeeder::class,
            PrestasiSeeder::class,
            ProyekSeeder::class,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
