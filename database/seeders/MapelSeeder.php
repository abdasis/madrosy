<?php

namespace Database\Seeders;

use App\Models\Akademik\Mapel;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::factory()->count(10)->create();
    }
}
