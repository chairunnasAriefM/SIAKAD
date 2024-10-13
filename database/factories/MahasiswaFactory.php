<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\RuangKuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('###########'), // 11-digit number
            'kd_jurusan' => Jurusan::inRandomOrder()->value('kd_jurusan'), // Mengambil kode jurusan yang ada
            'kd_ruang' => RuangKuliah::inRandomOrder()->value('kd_ruang'), // Mengambil kode ruang yang ada
            'nip' => Dosen::inRandomOrder()->value('nip'), // Mengambil NIP dosen yang ada
            'nama_mahasiswa' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'angkatan' => $this->faker->year(),
            'alamat' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'telepon' => $this->faker->numerify('08##########'), // 12 karakter nomor telepon
        ];
    }
}
