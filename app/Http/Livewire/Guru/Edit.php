<?php

namespace App\Http\Livewire\Guru;

use App\Models\Commons\Kabupaten;
use App\Models\Commons\Kecamatan;
use App\Models\Commons\Kelurahan;
use App\Models\Commons\Provinsi;
use App\Models\Commons\User;
use App\Models\Kepegawaian\Guru;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    use LivewireAlert;
    use WithFileUploads;

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
    public $avatar;
    public $preview_avatar;

    public $guru;

    public function mount(Guru $guru)
    {
        $provinsi = Provinsi::where('code', $guru->provinsi)->first()->code ?? null;
        $this->nama = $guru->nama;
        $this->nik = $guru->nik;
        $this->agama = $guru->agama;
        $this->jenis_kelamin = \Str::title($guru->jenis_kelamin);
        $this->tempat_lahir = $guru->tempat_lahir;
        $this->tanggal_lahir = $guru->tanggal_lahir;
        $this->nama_ibu = $guru->nama_ibu;
        $this->tempat_tinggal = $guru->tempat_tinggal;
        $this->no_hp = $guru->no_hp;
        $this->email = $guru->email;
        $this->pendidikan_terakhir = $guru->pendidikan_terakhir;
        $this->unit_sekolah_id = $guru->unit_sekolah_id;
        $this->jabatan = $guru->jabatan;
        $this->status_guru = $guru->status_guru;
        $this->tanggal_masuk = $guru->tanggal_masuk;
        $this->foto = $guru->foto;
        $this->status = $guru->status;
        $this->provinsi = $provinsi;
        $this->kabupaten = $guru->kabupaten;
        $this->kecamatan = $guru->kecamatan;
        $this->kelurahan = $guru->kelurahan;
        $this->dusun = $guru->dusun;
        $this->pos = $guru->kode_pos;
        $this->guru = $guru;
        $this->user = $guru->user;
        $this->password = $this->user->password;
        $this->role = $this->user->getRoleNames()->first() ?? '';
        $this->preview_avatar = $guru->avatar != null ? asset($guru->avatar->nama_file) : 'https://ui-avatars.com/api/?background=random&name=' . $guru->nama;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'nik' => 'required|unique:gurus,nik,' . $this->guru->id,
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->guru->user->id,
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
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
            'role' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'avatar.max' => 'Foto maksimal ukuran 1 Mb'
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

            $this->user->update([
                'email' => $this->email
            ]);

            $this->user->syncRoles($this->role);

            $guru = Guru::find($this->guru->id);

            $guru->update([
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
                'user_id' => $this->guru->user->id,
                'provinsi' => $this->provinsi,
                'kabupaten' => $this->kabupaten,
                'kecamatan' => $this->kecamatan,
                'kelurahan' => $this->kelurahan,
                'dusun' => $this->dusun,
                'kode_pos' => $this->pos,
            ]);

            if ($this->avatar) {
                $uuid = \Str::uuid();
                $nama_file = "{$this->nama}-{$uuid}";
                $nama_file = \Str::slug($nama_file) . '.' . $this->avatar->extension();
                $guru->avatar()->create([
                    'nama_file' => $this->avatar->storeAs('upload', $nama_file),
                ]);
            }

            DB::commit();

            $this->flash('success', 'Data berhasil diperbarui', [], route('guru.semua'));

        } catch (\Exception $exception) {
            Debugbar::info($exception);
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

        return view('livewire.guru.edit', [
            'semua_provinsi' => $semua_provinsi,
            'semua_kabupaten' => $kabupaten ?? [],
            'semua_kecamatan' => $kecamatan ?? [],
            'semua_kelurahan' => $kelurahan ?? [],
            'data_jabatan' => Role::all(),
        ]);
    }
}
