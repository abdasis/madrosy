<?php

namespace Database\Seeders\Kepegawaian;

use App\Models\Commons\User;
use App\Models\Kepegawaian\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(32)->has(Guru::factory(), 'guru')->create();
    }
}
