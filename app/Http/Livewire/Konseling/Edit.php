<?php

namespace App\Http\Livewire\Konseling;

use App\Models\Akademik\Konseling;
use App\Models\Akademik\Pelanggaran;
use App\Models\Akademik\Santri;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;

    public $santri_id;
    public $tanggal;
    public $pelanggaran_id;
    public $keterangan;
    public $konseling_id;

    public function mount(Konseling $konseling)
    {
        $this->santri_id = $konseling->santri_id;
        $this->tanggal = Carbon::parse($konseling->tanggal)->format('d F, Y');
        $this->pelanggaran_id = $konseling->pelanggaran_id;
        $this->keterangan = $konseling->keterangan;
        $this->konseling_id = $konseling->id;
    }

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

    public function update()
    {
        $this->validate();
        try {
            $konseling = Konseling::where('id', $this->konseling_id)->update([
                'santri_id' => $this->santri_id,
                'pelanggaran_id' => $this->pelanggaran_id,
                'tanggal' => Carbon::parse($this->tanggal)->format('Y-m-d'),
                'keterangan' => $this->keterangan,
            ]);
            $this->alert('success', 'Data Berhasil diperbarui');
        } catch (\Exception $e) {
            $this->alert('error', 'Kesalahaan saat memperbarui data');
        }
    }
    public function render()
    {
        $pelanggaran = Pelanggaran::orderBy('bobot', 'asc')->get();
        $siswa = Santri::orderBy('nama_lengkap', 'asc')->get();
        return view('livewire.konseling.edit',[
            'semua_siswa' => $siswa,
            'semua_pelanggaran' => $pelanggaran
        ]);
    }
}
