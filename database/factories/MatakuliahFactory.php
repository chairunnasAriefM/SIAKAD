<?php

namespace Database\Factories;

use App\Models\Prasyarat;
use App\Models\RuangKuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $matakuliahNames = [
            'Dasar-Dasar Pemrograman',
            'Struktur Data',
            'Basis Data',
            'Jaringan Komputer',
            'Analisis dan Desain Sistem',
            'Kecerdasan Buatan',
            'Pengembangan Web',
            'Keamanan Jaringan',
            'Pemrograman Berorientasi Objek',
            'Sistem Operasi',
        ];

        return [
            'kd_mk' => $this->faker->unique()->bothify('MK###'), // Contoh kode matakuliah seperti MK101
            'kd_ruang' => RuangKuliah::inRandomOrder()->value('kd_ruang'), // Mengambil kode ruang yang ada
            'nama_mk' => $this->faker->randomElement($matakuliahNames),
            'semester' => $this->faker->numberBetween(1, 8),
            'jumlah_sks' => $this->faker->numberBetween(1, 4),
            'prasyarat' => Prasyarat::inRandomOrder()->value('id_prasyarat'), // Mengambil ID prasyarat yang ada
        ];
    }
}
