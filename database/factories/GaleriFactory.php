<?php

namespace Database\Factories;

use App\Models\Galeri;
use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriFactory extends Factory
{
    protected $model = Galeri::class;

    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(4, true),
            'deskripsi' => $this->faker->paragraph(),
            'gambar' => 'https://picsum.photos/1024/768?random=' . $this->faker->numberBetween(1, 1000),
            'tanggal' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
