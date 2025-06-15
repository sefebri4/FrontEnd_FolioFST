<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Mahasiswa::truncate();

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $program_studi = ProgramStudi::all();

        foreach ($program_studi as $prodi) {
            Mahasiswa::factory()->count(30)->create([
                'program_studi_id' => $prodi->id
            ]);
        }
    }

}
