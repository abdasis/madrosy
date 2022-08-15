<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekening>
 */
class RekeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'santri_id' => $this->faker->unique()->numberBetween(1,500),
            'nomor_rekening' => $this->faker->numberBetween(1000000000,9999999999),
            'jenis_rekening' => $this->faker->randomElement(['harian', 'tabungan']),
            'passcode' => bcrypt(123456),
            'status' => $this->faker->randomElement(['aktif', 'non-aktif']),
            'dibuat_oleh' => 1,
            'diubah_oleh' => 1,
        ];
    }
}
