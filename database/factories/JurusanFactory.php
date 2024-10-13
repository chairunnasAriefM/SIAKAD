<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jurusan>
 */
class JurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jurusanNames = [
            'Teknik Informatika',
            'Sistem Informasi',
            'Manajemen',
            'Akuntansi',
            'Ilmu Komputer',
            'Desain Komunikasi Visual',
            'Teknik Elektro',
            'Pendidikan Bahasa Inggris',
            'Psikologi',
            'Hukum',
        ];

        return [
            'kd_jurusan' => $this->faker->unique()->numerify('JU###'),
            'nama_jurusan' => $this->faker->randomElement($jurusanNames),
            'jenjang_pendidikan' => $this->faker->randomElement(['D3', 'S1', 'S2']),
        ];
    }
}
