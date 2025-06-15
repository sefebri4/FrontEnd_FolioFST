<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;

    public function definition(): array
    {
        $angkatan = $this->faker->numberBetween(2020, 2024);
        $prodi_id = ProgramStudi::inRandomOrder()->first()->id ?? 1;

        return [
            'nim' => $angkatan . $this->faker->unique()->numerify('##########'), // Format: Tahun+10 digit
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'foto' => 'https://randomuser.me/api/portraits/' . $this->faker->randomElement(['men', 'women']) . '/' . $this->faker->numberBetween(1, 99) . '.jpg',
            'angkatan' => $angkatan,
            'telepon' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'program_studi_id' => $prodi_id,
        ];
    }
}
