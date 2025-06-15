<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    protected $model = Dosen::class;

    public function definition(): array
    {
        $gelar = $this->faker->randomElement(['S.Kom., M.Kom.', 'S.T., M.T.', 'S.Si., M.Cs.', 'S.Kom., M.Eng.', 'S.T., M.Sc.', 'S.Kom., Ph.D.']);

        return [
            'status' => 'dosen',
            'nama' => $this->faker->name(),
            'nidn' => $this->faker->unique()->numerify('##########'), // 10 digit
            'email' => $this->faker->unique()->safeEmail(),
            'foto' => 'https://randomuser.me/api/portraits/' . $this->faker->randomElement(['men', 'women']) . '/' . $this->faker->numberBetween(1, 99) . '.jpg',
            'gelar' => $gelar,
            'bidang_keahlian' => $this->faker->randomElement(['Pemrograman Web', 'Kecerdasan Buatan', 'Jaringan Komputer', 'Analisis Data', 'Keamanan Siber', 'Mobile Computing', 'Database']),
            'telepon' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'program_studi_id' => function () {
                return ProgramStudi::inRandomOrder()->first()->id;
            },
        ];
    }
}
