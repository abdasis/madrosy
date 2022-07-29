<?php

namespace App\Http\Livewire\Santri;

use App\Models\Santri;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

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

    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required|unique:santris',
        ];
    }

    public function simpan()
    {
        $this->validate();

        try {

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
            ]);

            $this->alert('success', "Santri {$santri->nama_lengkap} berhasil ditambahkan");

            $this->reset();
        }catch (\Exception $e) {
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
