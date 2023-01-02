<?php

namespace App\Http\Livewire\Santri;

use App\Models\Commons\User;
use App\Models\Kesiswaan\Santri;
use App\Traits\FormatRupiah;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $nama_lengkap;
    public $nama_panggilan;
    public $nisn;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $agama;
    public $jenis_kelamin;
    public $anak_ke;
    public $jumlah_saudara;
    public $status_keluarga;
    public $email;
    public $no_hp;
    public $alamat;
    public $avatar;
    public $nik;

    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|unique:users,email|email',
            'nisn' => 'required|unique:santris|min_digits:9|max_digits:9',
            'jumlah_saudara' => ['required', 'numeric', 'min:1'],
            'anak_ke' => 'required|lte:jumlah_saudara',
            'no_hp' => 'required|unique:santris,no_hp',
            'avatar' => 'nullable|image|max:1024|mimes:jpg,png,jpeg,webp',
            'nik' => 'required|unique:santris,nik|min_digits:9|max_digits:20',
        ];
    }

    public function messages()
    {
        return [
            'avatar.max' => 'Foto maksimal ukuran 1 Mb'
        ];
    }

    public function updatedJumlahSaudara($value)
    {
        if ($value > 1) {
            $this->anak_ke = 1;
        } else {
            $this->anak_ke = 1;
        }
    }


    public function simpan()
    {
        $this->validate();

        try {

            \DB::beginTransaction();

            $user = User::create([
                'name' => $this->nama_lengkap,
                'email' => $this->email,
                'password' => bcrypt($this->nisn),
            ]);

            $user->assignRole('Siswa');

            $santri = Santri::create([
                'nama_lengkap' => $this->nama_lengkap,
                'nama_panggilan' => $this->nama_panggilan,
                'nisn' => $this->nisn,
                'tempat_lahir' => $this->tempat_lahir,
                'tanggal_lahir' => $this->tanggal_lahir,
                'agama' => $this->agama,
                'jenis_kelamin' => $this->jenis_kelamin,
                'anak_ke' => $this->anak_ke,
                'jumlah_saudara' => $this->jumlah_saudara,
                'status_keluarga' => $this->status_keluarga,
                'email' => $this->email,
                'no_hp' => $this->no_hp,
                'alamat' => $this->alamat,
                'user_id' => $user->id,
                'nik' => $this->nik,
            ]);

            if ($this->avatar) {
                $uuid = \Str::uuid();
                $nama_file = "{$santri->nama_lengkap}-{$uuid}.{$this->avatar->extension()}";

                $santri->avatar()->create([
                    'nama_file' => $this->avatar->storeAs('upload', $nama_file),
                ]);
            }

            \DB::commit();

            $this->alert('success', "Santri {$santri->nama_lengkap} berhasil ditambahkan");

            $this->reset();
        } catch (\Exception $e) {
            \DB::rollBack();
            \Debugbar::info($e);
            $this->alert('error', 'Kesalahan', [
                'text' => 'Terjadi kesalahan saat menyimpan data',
            ]);
            return;
        }
    }

    public function render()
    {
        return view('livewire.santri.tambah',);
    }
}
