<?php

namespace Database\Seeders;

use App\Models\Akademik\TahunAjaran;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TahunAjaran::factory()->count(5)->create();
    }
}
