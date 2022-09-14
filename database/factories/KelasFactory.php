<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_kelas' => 'KLS'.str_pad($this->faker->randomNumber(2), 5, '0', STR_PAD_LEFT),
            'nama_kelas' => $this->faker->name,
            'wali_kelas' => $this->faker->numberBetween(1, 32),
        ];
    }
}
