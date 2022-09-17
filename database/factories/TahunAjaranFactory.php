<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akademik\TahunAjaran>
 */
class TahunAjaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tahun_awal' => $this->faker->year,
            'tahun_akhir' => $this->faker->year,
            'status' => $this->faker->randomElement(['Aktif', 'Non-Aktif']),
        ];
    }
}
