<?php

namespace Database\Factories;

use App\Models\Proyek;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProyekFactory extends Factory
{
    protected $model = Proyek::class;

    public function definition(): array
    {
        $tanggal_mulai = $this->faker->dateTimeBetween('-2 years', 'now');
        $durasi_bulan = $this->faker->numberBetween(1, 12);
        $tanggal_selesai = (clone $tanggal_mulai)->modify("+$durasi_bulan months");

        $status = 'Berjalan';
        $now = new \DateTime();
        if ($tanggal_selesai < $now) {
            $status = 'Selesai';
        } elseif ($this->faker->boolean(20)) { // 20% chance to be pending
            $status = 'Tertunda';
        }

        $untuk_mahasiswa = $this->faker->boolean(80); // 80% melibatkan mahasiswa

        $judul_proyek = [
            'Pengembangan Sistem Informasi',
            'Aplikasi Mobile',
            'Sistem IoT',
            'Analisis Data',
            'Keamanan Jaringan',
            'Aplikasi Web',
            'Machine Learning',
            'Smart System',
            'Blockchain',
            'Virtual Reality'
        ];

        $domain = [
            'Kesehatan',
            'Pendidikan',
            'Pertanian',
            'Transportasi',
            'E-commerce',
            'Keuangan',
            'Industri',
            'Lingkungan',
            'Pemerintahan',
            'Pariwisata'
        ];

        if ($untuk_mahasiswa) {
            $mahasiswa = Mahasiswa::inRandomOrder()->first();
            $dosen = Dosen::inRandomOrder()->first();

            $proyek = [
                'judul' => $this->faker->randomElement($judul_proyek) . ' untuk ' . $this->faker->randomElement($domain),
                'deskripsi' => $this->faker->paragraphs(2, true),
                'tanggal_mulai' => $tanggal_mulai,
                'tanggal_selesai' => $tanggal_selesai,
                'status' => $status,
                'foto' => 'https://picsum.photos/800/600?random=' . $this->faker->numberBetween(1, 1000),
                'nim' => $mahasiswa ? $mahasiswa->nim : null,
                'nidn' => $dosen ? $dosen->nidn : null,
            ];
        } else {
            $dosen = Dosen::inRandomOrder()->first();
            $proyek = [
                'judul' => $this->faker->randomElement($judul_proyek) . ' untuk ' . $this->faker->randomElement($domain),
                'deskripsi' => $this->faker->paragraphs(2, true),
                'tanggal_mulai' => $tanggal_mulai,
                'tanggal_selesai' => $tanggal_selesai,
                'status' => $status,
                'foto' => 'https://picsum.photos/800/600?random=' . $this->faker->numberBetween(1, 1000),
                'nim' => null,
                'nidn' => $dosen ? $dosen->nidn : null,
            ];
        }

        return $proyek;
    }
}
