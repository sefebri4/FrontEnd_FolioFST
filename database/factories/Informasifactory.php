<?php

namespace Database\Factories;

use App\Models\Informasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformasiFactory extends Factory
{
    protected $model = Informasi::class;

    public function definition(): array
    {
        $jenis_informasi = [
            'Pengumuman Akademik',
            'Info Beasiswa',
            'Jadwal Ujian',
            'Seminar',
            'Workshop',
            'Lowongan Kerja',
            'Kegiatan Mahasiswa',
            'Pengumuman Umum'
        ];

        return [
            'judul' => $this->faker->randomElement($jenis_informasi) . ': ' . $this->faker->sentence(4, true),
            'isi' => $this->faker->paragraphs(3, true),
            'tanggal_posting' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'gambar' => 'https://picsum.photos/800/450?random=' . $this->faker->numberBetween(1, 1000),
        ];
    }
}
