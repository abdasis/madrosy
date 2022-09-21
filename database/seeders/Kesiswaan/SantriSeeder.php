<?php

namespace Database\Seeders\Kesiswaan;

use App\Models\Akademik\Santri;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Santri::factory()->count(500)->create();
    }
}
