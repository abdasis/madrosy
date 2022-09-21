<?php

namespace Database\Factories\Akademik;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akademik\Mapel>
 */
class MapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $mapel = ["Pendidikan Agama", "PPKn", "Bahasa Indonesia", "Matematika", "IPA", "IPS", "Bahasa Inggris", "Seni dan Prakarya", "Pendidikan Jasmani", "Informatika", "Program Pengembangan Karakter", "Agama dan Kepercayaan kepada Tuhan YME", "PPKN", "Bahasa Indonesia", "Matematika", "Bahasa Inggris", "Seni dan Prakarya", "Pendidikan Jasmani"];
        return [
            'kode' => 'MPL'.str_pad($this->faker->randomNumber(2), 5, '0', STR_PAD_LEFT),
            'nama' => $this->faker->unique()->randomElement($mapel),
            'dibuat_oleh' => 1,
            'diubah_oleh' => 1,
        ];
    }
}
