<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'kode' => 'JDW'.str_pad($this->faker->unique()->randomNumber(2), 5, '0', STR_PAD_LEFT),
            'mapel_id' => $this->faker->numberBetween(1, 10),
            'kelas_id' => $this->faker->numberBetween(1, 10),
            'guru_id' => $this->faker->numberBetween(1, 32),
            'hari' => $this->faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']),
            'jam_mulai' => $this->faker->time('H:i:s'),
            'jam_selesai' => $this->faker->time('H:i:s'),
            'status' => $this->faker->randomElement(['aktif', 'nonaktif']),
        ];
    }
}
