<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
{
    public function run()
    {
        $programStudi = [
            [
                'nama' => 'S1 Rekayasa Perangkat Lunak',
                'deskripsi' => 'Program studi yang berfokus pada pengembangan perangkat lunak, termasuk desain, pengkodean, pengujian, dan pemeliharaan sistem perangkat lunak.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'S1 Sistem Informasi',
                'deskripsi' => 'Program studi yang menggabungkan teknologi informasi dan manajemen bisnis untuk merancang, mengembangkan, dan mengelola sistem informasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'S1 Informatika',
                'deskripsi' => 'Program studi yang mempelajari ilmu komputer, termasuk algoritma, pemrograman, kecerdasan buatan, dan pengelolaan data.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($programStudi as $prodi) {
            ProgramStudi::updateOrCreate(
                ['nama' => $prodi['nama']],
                $prodi
            );
        }
    }
}
