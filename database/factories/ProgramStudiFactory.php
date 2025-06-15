<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProgramStudi;

class ProgramStudiFactory extends Factory
{
    protected $model = ProgramStudi::class;

    public function definition()
    {
        $programStudi = [
            [
                'nama' => 'S1 Rekayasa Perangkat Lunak',
                'deskripsi' => 'Program studi yang berfokus pada pengembangan perangkat lunak, termasuk desain, pengkodean, pengujian, dan pemeliharaan sistem perangkat lunak.',
            ],
            [
                'nama' => 'S1 Sistem Informasi',
                'deskripsi' => 'Program studi yang menggabungkan teknologi informasi dan manajemen bisnis untuk merancang, mengembangkan, dan mengelola sistem informasi.',
            ],
            [
                'nama' => 'S1 Informatika',
                'deskripsi' => 'Program studi yang mempelajari ilmu komputer, termasuk algoritma, pemrograman, kecerdasan buatan, dan pengelolaan data.',
            ],
        ];

        return $programStudi[array_rand($programStudi)];
    }
}
