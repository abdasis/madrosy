<?php

namespace Database\Factories\Akademik;

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
            'tahun_awal' => $this->faker->unique()->year,
            'tahun_akhir' => $this->faker->unique()->year,
            'status' => $this->faker->randomElement(['aktif', 'non-aktif']),
        ];
    }
}
