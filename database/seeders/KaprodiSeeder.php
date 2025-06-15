<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;

class KaprodiSeeder extends Seeder
{
    public function run(): void
    {
        $kaprodiData = [
            [
                'program_studi' => 'S1 Rekayasa Perangkat Lunak',
                'nama' => 'Tutus Praningki',
                'nidn' => '0714078602',
                'email' => 'rpl@example.com',
                'gelar' => 'S.Kom, M.Kom',
                'bidang_keahlian' => 'Informatika',
                'telepon' => '+6281234567890',
                'alamat' => 'Indonesia',
            ],
            [
                'program_studi' => 'S1 Sistem Informasi',
                'nama' => 'Mawar Hardiyanti',
                'nidn' => '0612029501',
                'email' => 'si@example.co.id',
                'gelar' => 'S.Kom., M.Kom',
                'bidang_keahlian' => 'Sistem Informasi',
                'telepon' => '+6281987654321',
                'alamat' => 'Indonesia',
            ],
            [
                'program_studi' => 'S1 Informatika',
                'nama' => 'Endang Anggiratih',
                'nidn' => '0608048602',
                'email' => 'informatika@example.com',
                'gelar' => 'S.T., M.Cs',
                'bidang_keahlian' => 'Statistika',
                'telepon' => '+6285678901234',
                'alamat' => 'Indonesia',
            ],
        ];

        foreach ($kaprodiData as $data) {
            // Cari program studi berdasarkan nama
            $prodi = ProgramStudi::where('nama', $data['program_studi'])->first();

            if (!$prodi) {
                throw new \Exception("Program studi '{$data['program_studi']}' tidak ditemukan.");
            }

            Dosen::create([
                'status' => 'kaprodi',
                'nama' => $data['nama'],
                'nidn' => $data['nidn'],
                'email' => $data['email'],
                'foto' => null, // Dikosongkan
                'gelar' => $data['gelar'],
                'bidang_keahlian' => $data['bidang_keahlian'],
                'telepon' => $data['telepon'],
                'alamat' => $data['alamat'],
                'program_studi_id' => $prodi->id,
            ]);
        }
    }
}
