<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RuangKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kd_ruang' => $this->faker->unique()->bothify('R###'), // Contoh kode ruang seperti R001
            'nama_ruang' => $this->faker->lexify('R???'), // Nama ruang pendek, seperti RLAB
            'kapasitas' => $this->faker->numberBetween(20, 100),
        ];
    }
}
