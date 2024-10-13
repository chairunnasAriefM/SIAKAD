<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => $this->faker->unique()->numerify('##########'), // 10-digit number
            'nama_dosen' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'alamat' => Str::limit($this->faker->address(), 50), // Memastikan alamat tidak lebih dari 50 karakter
            'email' => $this->faker->unique()->safeEmail(),
            'telepon' => $this->faker->numerify('08##########'), // 12 karakter nomor telepon
        ];
    }
}
