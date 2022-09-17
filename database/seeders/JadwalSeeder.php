<?php

namespace Database\Seeders;

use App\Models\Akademik\Jadwal;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::factory()->count(32)->create();
    }
}
