<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    protected $model = Berita::class;

    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(6, true),
            'isi' => $this->faker->paragraphs(4, true),
            'tanggal_posting' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'penulis' => $this->faker->name(),
            'gambar' => 'https://picsum.photos/800/600?random=' . $this->faker->numberBetween(1, 1000),
        ];
    }
}
