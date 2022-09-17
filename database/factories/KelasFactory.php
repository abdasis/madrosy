<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akademik\Kelas>
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
        $kelas = ["VII A", "VII B", "VII C", "VIII A", "VIII B", "VIII C", "VIII D", "IX A", "IX B", "IX C", "IX D", "IX F"];
        return [
            'kode_kelas' => 'KLS'.str_pad($this->faker->randomNumber(2), 5, '0', STR_PAD_LEFT),
            'nama_kelas' => $this->faker->unique()->randomElement($kelas),
            'wali_kelas' => $this->faker->numberBetween(1, 32),
        ];
    }
}
