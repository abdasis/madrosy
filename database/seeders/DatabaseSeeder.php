<?php

namespace Database\Seeders;

use App\Models\Rekening;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         User::create([
             'name' => 'Abdul Aziz',
             'email' => 'id.abdasis@gmail.com',
             'password' => bcrypt('rahasia123'),
         ]);

         Role::insert([
             ['name' => 'Super Admin', 'guard_name' => 'web'],
             ['name' => 'Guru', 'guard_name' => 'web'],
             ['name' => 'Siswa', 'guard_name' => 'web'],
             ['name' => 'Pimpinan', 'guard_name' => 'web'],
             ['name' => 'Pegawai', 'guard_name' => 'web'],
             ['name' => 'Wali Murid', 'guard_name' => 'web'],
         ]);

        $this->call([
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
            VillagesSeeder::class,
            SantriSeeder::class,
        ]);

        if (app()->environment('local')) {
            $this->call([
                GuruSeeder::class,
                RekeningSeeder::class,
                TahunAjaranSeeder::class,
                KelasSeeder::class,
                MapelSeeder::class,
                JadwalSeeder::class,
            ]);
        }
    }
}
