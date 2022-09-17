<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kepegawaian\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nik' => $this->faker->numberBetween(100000000, 999999999),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->randomElement(['Jakarta', 'Bandung', 'Surabaya', 'Malang', 'Yogyakarta']),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-30 years', '-18 years'),
            'nama_ibu' => $this->faker->name('female'),
            'tempat_tinggal' => $this->faker->streetAddress,
            'dusun' => $this->faker->city,
            'kelurahan' => $this->faker->city,
            'kecamatan' => $this->faker->city,
            'kabupaten' => $this->faker->city,
            'provinsi' => $this->faker->city,
            'kode_pos' => $this->faker->postcode,
            'no_hp' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'pendidikan_terakhir' => $this->faker->randomElement(['Tidak Sekolah', 'SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3']),
            'unit_sekolah_id' => $this->faker->numberBetween(1, 10),
            'jabatan' => $this->faker->randomElement(['Guru', 'Wali Kelas']),
            'status_guru' => $this->faker->randomElement(['Tetap', 'Kontrak', 'Magang', 'Lainnya']),
            'tanggal_masuk' => $this->faker->dateTimeBetween('-30 years', '-18 years'),
            'foto' => $this->faker->imageUrl(300, 300),
            'status' => $this->faker->randomElement(['Aktif', 'Non-Aktif']),
            'dibuat_oleh' => 1,
            'diedit_oleh' => 1,
        ];
    }
}
