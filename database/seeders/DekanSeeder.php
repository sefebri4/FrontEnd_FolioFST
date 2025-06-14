<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;

class DekanSeeder extends Seeder
{
    public function run(): void
    {
        $prodi = ProgramStudi::where('nama', 'S1 Rekayasa Perangkat Lunak')->first();

        if (!$prodi) {
            throw new \Exception('Program studi "S1 Rekayasa Perangkat Lunak" tidak ditemukan.');
        }

        Dosen::create([
            'status' => 'dekan',
            'nama' => 'Moyo Hady Poernomo',
            'nidn' => '0409058202', // Nanti diedit
            'email' => 'dekan@example.com', // Nanti diedit
            'foto' => null, // Dikosongkan
            'gelar' => 'S.Kom., M.Kom.',
            'bidang_keahlian' => 'Rekayasa Perangkat Lunak',
            'telepon' => '081234567890',
            'alamat' => 'Alamat Dekan', 
            'program_studi_id' => $prodi->id,
        ]);
    }
}
