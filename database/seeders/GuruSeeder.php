<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Database\Factories\GuruFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
