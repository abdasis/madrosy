<?php

namespace Database\Factories\Kesiswaan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kesiswaan\Santri>
 */
class SantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'nisn' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'nik' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->dateTimeBetween('-30 years', '-18 years'),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'anak_ke' => $this->faker->numberBetween(1, 10),
            'jumlah_saudara' => $this->faker->numberBetween(1, 10),
            'status_keluarga' => $this->faker->randomElement(['Anak Kandung', 'Anak Tiri', 'Anak Angkat']),
            'email' => $this->faker->unique()->email,
            'no_hp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
        ];
    }
}
