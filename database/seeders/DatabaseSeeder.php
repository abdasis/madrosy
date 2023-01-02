<?php

namespace Database\Seeders;

use App\Models\Commons\User;
use Database\Seeders\Akademik\JadwalSeeder;
use Database\Seeders\Akademik\KelasSeeder;
use Database\Seeders\Akademik\MapelSeeder;
use Database\Seeders\Akademik\TahunAjaranSeeder;
use Database\Seeders\Commons\RolesSeeder;
use Database\Seeders\Kepegawaian\GuruSeeder;
use Database\Seeders\Kesiswaan\PelanggaranSeeder;
use Database\Seeders\Kesiswaan\SantriSeeder;
use Database\Seeders\Keuangan\RekeningSeeder;
use Illuminate\Database\Seeder;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        if (app()->environment('local')) {
            $this->call([
                RolesSeeder::class,
                ProvincesSeeder::class,
                CitiesSeeder::class,
                DistrictsSeeder::class,
                VillagesSeeder::class,
                GuruSeeder::class,
                SantriSeeder::class,
                RekeningSeeder::class,
                TahunAjaranSeeder::class,
                KelasSeeder::class,
                MapelSeeder::class,
                JadwalSeeder::class,
                PelanggaranSeeder::class,
            ]);
        } else {
            $this->call([
                GuruSeeder::class,
                ProvincesSeeder::class,
                CitiesSeeder::class,
                DistrictsSeeder::class,
                VillagesSeeder::class,
                RolesSeeder::class,
            ]);
        }

    }
}
