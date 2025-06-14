<?php

namespace Database\Factories;

use App\Models\Prestasi;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestasiFactory extends Factory
{
    protected $model = Prestasi::class;

    public function definition(): array
    {
        $untuk_mahasiswa = $this->faker->boolean(70);

        $prestasi_mahasiswa = [
            'Juara Lomba Pemrograman',
            'Juara Hackathon',
            'Juara Kompetisi Desain',
            'Mahasiswa Berprestasi',
            'Penerima Beasiswa Prestasi',
            'Delegasi Pertukaran Mahasiswa',
            'Juara Kompetisi Startup',
            'Presenter Terbaik di Konferensi',
            'Juara Kompetisi IoT'
        ];

        $prestasi_dosen = [
            'Penelitian Terbaik',
            'Dosen Berprestasi',
            'Penghargaan Publikasi Ilmiah',
            'Pemakalah Terbaik',
            'Penerima Hibah Penelitian',
            'Penghargaan Pengabdian Masyarakat',
            'Inovator Teknologi',
            'Reviewer Jurnal Internasional'
        ];

        if ($untuk_mahasiswa) {
            $mahasiswa = Mahasiswa::inRandomOrder()->first();
            $prestasi = [
                'judul' => $this->faker->randomElement($prestasi_mahasiswa),
                'deskripsi' => $this->faker->paragraph(3),
                'tanggal' => $this->faker->dateTimeBetween('-2 years', 'now'),
                'foto' => 'https://picsum.photos/800/600?random=' . $this->faker->numberBetween(1, 1000),
                'nim' => $mahasiswa ? $mahasiswa->nim : null, // Tambahkan pengecekan null
                'nidn' => null,
            ];
        } else {
            $dosen = Dosen::inRandomOrder()->first();
            $prestasi = [
                'judul' => $this->faker->randomElement($prestasi_dosen),
                'deskripsi' => $this->faker->paragraph(3),
                'tanggal' => $this->faker->dateTimeBetween('-2 years', 'now'),
                'foto' => 'https://picsum.photos/800/600?random=' . $this->faker->numberBetween(1, 1000),
                'nim' => null,
                'nidn' => $dosen ? $dosen->nidn : null,
            ];
        }

        return $prestasi;
    }
}
