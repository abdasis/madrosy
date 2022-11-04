<?php

namespace Database\Factories\Kesiswaan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kesiswaan\Pelanggaran>
 */
class PelanggaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kasus' => $this->faker->sentence(),
            'bobot' => $this->faker->numberBetween(1, 100),
            'dibuat_oleh' => 1,
            'diedit_oleh' => 1,
        ];
    }
}
