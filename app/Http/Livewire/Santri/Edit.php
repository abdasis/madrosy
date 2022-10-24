<?php

namespace App\Http\Livewire\Santri;

use App\Models\Kesiswaan\Santri;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
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

    public $santri_id;

    public function mount($id)
    {
        $santri                 = Santri::find($id);
        $this->santri_id        = $santri->id;
        $this->nama_lengkap     = $santri->nama_lengkap;
        $this->nama_panggilan   = $santri->nama_panggilan;
        $this->nisn             = $santri->nisn;
        $this->tempat_lahir     = $santri->tempat_lahir;
        $this->tanggal_lahir    = $santri->tanggal_lahir;
        $this->agama            = $santri->agama;
        $this->jenis_kelamin    = $santri->jenis_kelamin;
        $this->anak_ke          = $santri->anak_ke;
        $this->jumlah_saudara   = $santri->jumlah_saudara;
        $this->status_keluarga  = $santri->status_keluarga;
        $this->email            = $santri->email;
        $this->no_hp            = $santri->no_hp;
        $this->alamat           = $santri->alamat;
    }

    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required|unique:santris,nisn,' . $this->santri_id,
        ];
    }

    public function simpan()
    {
        $this->validate();

        try {

            $santri = Santri::where('id', $this->santri_id)->update([
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

            $this->flash('success', 'Berhasil', [
                'text' => "Santri {$this->nama_lengkap} berhasil diperbarui",
            ], route('santri.semua'));

        }catch (\Exception $e) {
            $this->alert('error', 'Kesalahan', [
                'text' => 'Terjadi kesalahan saat menyimpan data',
            ]);
            return;
        }
    }

    public function render()
    {
        return view('livewire.santri.edit');
    }
}
