<?php

namespace Database\Seeders;

use App\Models\Akademik\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::factory()->count(11)->create();
    }
}
