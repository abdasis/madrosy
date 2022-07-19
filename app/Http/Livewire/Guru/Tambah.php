<?php

namespace App\Http\Livewire\Guru;

use App\Models\Guru;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $provinsi;
    public $kabupaten;
    public $kecamatan;
    public $kelurahan;
    public $dusun;
    public $pos;

    public $nama;
    public $nik;
    public $agama;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $nama_ibu;
    public $tempat_tinggal;
    public $no_hp;
    public $email;
    public $pendidikan_terakhir;
    public $unit_sekolah_id;
    public $jabatan;
    public $status_guru;
    public $tanggal_masuk;
    public $foto;
    public $status;

    public function rules()
    {
        return [
            'nama' => 'required',
            'nik' => 'required|unique:gurus',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'email' => 'required|email|unique:users',
            'pendidikan_terakhir' => 'required',
            'tanggal_masuk' => 'required',
            'jabatan' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'dusun' => 'required',
            'pos' => 'required',
            'status_guru' => 'required',
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function simpan()
    {
        $this->validate();

        try {
            DB::beginTransaction();
            //membuat user guru baru
            $user = User::create([
                'name' => $this->nama,
                'email' => $this->email,
                'password' => bcrypt($this->nik),
            ]);

            //menyimpan data guru
            $guru = Guru::create([
                'nama' => $this->nama,
                'nik' => $this->nik,
                'agama' => $this->agama,
                'jenis_kelamin' => $this->jenis_kelamin,
                'tempat_lahir' => $this->tempat_lahir,
                'tanggal_lahir' => $this->tanggal_lahir,
                'nama_ibu' => $this->nama_ibu,
                'tempat_tinggal' => $this->tempat_tinggal,
                'no_hp' => $this->no_hp,
                'email' => $this->email,
                'pendidikan_terakhir' => $this->pendidikan_terakhir,
                'unit_sekolah_id' => $this->unit_sekolah_id,
                'jabatan' => $this->jabatan,
                'status_guru' => $this->status_guru,
                'tanggal_masuk' => $this->tanggal_masuk,
                'foto' => $this->foto,
                'user_id' => $user->id,
            ]);

            $this->alert('success', 'Data guru berhasil disimpan');

            $this->reset();

            DB::commit();
        }catch (\Exception $exception){
            Debugbar::info($exception);
            DB::rollBack();
            $this->alert('error', 'Data guru gagal disimpan');
        }
    }

    public function render()
    {
        return view('livewire.guru.tambah',[
            'semua_provinsi' => \Indonesia::allProvinces(),
            'semua_kabupaten' => \Indonesia::allCities()->where('province_code', $this->provinsi),
            'semua_kecamatan' => \Indonesia::allDistricts()->where('city_code', $this->kabupaten),
            'semua_kelurahan' => \Indonesia::allVillages()->where('district_code', $this->kecamatan),
        ]);
    }
}
