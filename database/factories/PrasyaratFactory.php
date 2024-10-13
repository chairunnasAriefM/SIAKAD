<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prasyarat>
 */
class PrasyaratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_prasyarat' => $this->faker->unique()->bothify('PR###'), // Contoh kode prasyarat seperti PR101
            'mk_prasyarat' => $this->faker->sentence(2),
            'semester' => $this->faker->numberBetween(1, 8),
            'jumlah_sks' => $this->faker->numberBetween(1, 4),
        ];
    }
}
