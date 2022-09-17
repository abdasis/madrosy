<?php

namespace App\Http\Livewire\Konseling;

use App\Models\Akademik\Konseling;
use App\Models\Akademik\Pelanggaran;
use App\Models\Akademik\Santri;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $santri_id;
    public $tanggal;
    public $pelanggaran_id;
    public $keterangan;

    public function rules()
    {
        return [
            'santri_id' => 'required',
            'tanggal' => 'required',
            'pelanggaran_id' => 'required',

        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function simpan()
    {
        $this->validate();
        try {
            $konseling = Konseling::create([
                'santri_id' => $this->santri_id,
                'pelanggaran_id' => $this->pelanggaran_id,
                'tanggal' => Carbon::parse($this->tanggal)->format('Y-m-d'),
                'keterangan' => $this->keterangan,
            ]);
            $this->alert('success', 'Data Berhasil disimpan');
            $this->reset();
        } catch (\Exception $e) {
            $this->alert('error', 'Kesalahaan saat mau menyimpan data');
        }
    }

    public function render()
    {
        $pelanggaran = Pelanggaran::orderBy('bobot', 'asc')->get();
        $siswa = Santri::orderBy('nama_lengkap', 'asc')->get();
        return view('livewire.konseling.tambah', [
            'semua_siswa' => $siswa,
            'semua_pelanggaran' => $pelanggaran
        ]);
    }
}
