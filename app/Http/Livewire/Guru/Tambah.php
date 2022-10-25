<?php

namespace App\Http\Livewire\Guru;

use App\Models\Commons\Kabupaten;
use App\Models\Commons\Kecamatan;
use App\Models\Commons\Kelurahan;
use App\Models\Commons\User;
use App\Models\Kepegawaian\Guru;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Spatie\Permission\Models\Role;

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
    public $password;
    public $role;

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
    public function updatedNik($value)
    {
        $this->password = $value;
    }
    public function simpan()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $this->nama,
                'email' => $this->email,
                'password' => bcrypt($this->nik),
            ]);

            $user->assignRole($this->role);

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
                'foto' => "https://ui-avatars.com/api/?background=random&color=fff&name={$this->nama}",
                'user_id' => $user->id,
                'provinsi' => $this->provinsi,
                'kabupaten' => $this->kabupaten,
                'kecamatan' => $this->kecamatan,
                'kelurahan' => $this->kelurahan,
                'dusun' => $this->dusun,
                'kode_pos' => $this->pos,
            ]);

            $this->alert('success', 'Data guru berhasil disimpan');

            $this->reset();

            DB::commit();
        }catch (\Exception $exception){
            Debugbar::info($exception);
            report($exception);
            DB::rollBack();
            $this->alert('error', 'Data guru gagal disimpan');
        }
    }

    public function render()
    {
        $semua_provinsi = \Indonesia::allProvinces()->lazy(function ($provinces) {
            foreach ($provinces as $key => $province) {
                $provinsi[$key] = $province->name;
            }
        });

        if (isset($this->provinsi)) {
            $kabupaten = Kabupaten::where('province_code', $this->provinsi)->get();
        }

        if (isset($this->kabupaten)) {
            $kecamatan = Kecamatan::where('city_code', $this->kabupaten)->get();
        }


        if (isset($this->kecamatan)) {
            $kelurahan = Kelurahan::where('district_code', $this->kecamatan)->get();
        }

        return view('livewire.guru.tambah',[
            'semua_provinsi' => $semua_provinsi,
            'semua_kabupaten' => $kabupaten ?? [],
            'semua_kecamatan' => $kecamatan ?? [],
            'semua_kelurahan' => $kelurahan ?? [],
            'data_jabatan' => Role::all(),
        ]);
    }
}
