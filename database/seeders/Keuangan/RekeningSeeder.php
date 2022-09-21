<?php

namespace Database\Seeders\Keuangan;

use App\Models\Keuangan\Rekening;
use Illuminate\Database\Seeder;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rekening::factory()->count(50)->create();
    }
}
