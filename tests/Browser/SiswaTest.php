<?php

namespace Tests\Browser;

use App\Models\Commons\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SiswaTest extends DuskTestCase
{

    use DatabaseMigrations;

    public function test_user_bisa_akses_semua_siswa()
    {

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/santri')
                ->assertSee('SISWA PUTRA');
        });
    }

    public function test_bisa_tambah_data_santri()
    {

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/santri/tambah')
                ->assertSee('Tambah Data Siswa')
                ->type('nama_lengkap', 'Abdul Aziz')
                ->type('nama_panggilan', 'Aziz')
                ->type('nisn', 485820495)
                ->type('tempat_lahir', 'Bangkalan')
                ->type('tanggal_lahir', now())
                ->type('jenis_kelamin', 'Laki-laki')
                ->click('Simpan')
                ->assertSee('Data berhasil disimpan');
        });
    }
}
