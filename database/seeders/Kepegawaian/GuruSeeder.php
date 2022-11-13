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

        $user = User::create([
            'name' => 'Abdul Aziz',
            'email' => 'id.abdasis@gmail.com',
            'password' => bcrypt('rahasia123'),
        ]);
        Guru::create([
            'nama' => $user->name,
            'nik' => '349797693484',
            'agama' => 'Islam',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'Bangkalan',
            'tanggal_lahir' => now()->format('Y-m-d'),
            'nama_ibu' => 'Riyeh',
            'tempat_tinggal' => 'Bangkalan',
            'no_hp' => '081944999994',
            'email' => 'id.abdasis@gmail.com',
            'pendidikan_terakhir' => 'S1',
            'unit_sekolah_id' => '1',
            'jabatan' => 'Kepala Sekolah',
            'status_guru' => 'Guru Tetap',
            'tanggal_masuk' => now(),
            'foto' => "https://ui-avatars.com/api/?background=random&color=fff&name={$user->name}",
            'user_id' => $user->id,
            'provinsi' => 'Jawa Timur',
            'kabupaten' => 'Bangkalan',
            'kecamatan' => 'Tanah Merah',
            'kelurahan' => 'Rongdurin',
            'dusun' => 'Bandungan',
            'kode_pos' => 69172,
        ]);

        $user->assignRole('Administrator');

        User::factory()->count(32)->has(Guru::factory(), 'guru')->create();
    }
}
