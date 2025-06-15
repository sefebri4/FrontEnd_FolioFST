<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        // Get all program studi
        $program_studi = ProgramStudi::all();

        // Buat 10 dosen untuk setiap program studi
        foreach ($program_studi as $prodi) {
            Dosen::factory()->count(10)->create([
                'program_studi_id' => $prodi->id,
                'status' => 'dosen'
            ]);
        }
    }
}
