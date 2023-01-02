<?php

namespace Database\Seeders\Kesiswaan;

use App\Models\Kesiswaan\Pelanggaran;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggaran::factory()->count(10)->create();
    }
}
