<?php

namespace App\Http\Livewire\Konseling;

use App\Models\Kesiswaan\Konseling;
use App\Models\Kesiswaan\Pelanggaran;
use App\Models\Kesiswaan\Santri;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $santri_id;
    public $tanggal;
    public $pelanggaran_id;
    public $keterangan;
    public $foto_bukti;
    public $konseling_id;
    public $preview_foto;

    public function mount(Konseling $konseling)
    {
        $this->santri_id = $konseling->santri_id;
        $this->tanggal = Carbon::parse($konseling->tanggal)->format('d F, Y');
        $this->pelanggaran_id = $konseling->pelanggaran_id;
        $this->keterangan = $konseling->keterangan;
        $this->konseling_id = $konseling->id;
        $this->preview_foto = $konseling->foto_bukti;
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function rules()
    {
        return [
            'santri_id' => 'required',
            'tanggal' => 'required',
            'pelanggaran_id' => 'required',
            'foto_bukti' => 'nullable|image|max:1024|mimes:jpg,png,jpeg,webp',
        ];
    }


    public function message()
    {
        return [
            'foto_bukti.max' => 'Foto maksimal ukuran 1 Mb'
        ];
    }

    public function update()
    {
        $this->validate();
        try {
            $santri = Santri::find($this->santri_id);
            if ($this->foto_bukti) {
                $nama_file = \Str::slug($santri->nama_lengkap) . '-' . \Str::uuid() . ".{$this->foto_bukti->extension()}";
            }
            Konseling::where('id', $this->konseling_id)->update([
                'santri_id' => $this->santri_id,
                'pelanggaran_id' => $this->pelanggaran_id,
                'tanggal' => Carbon::parse($this->tanggal)->format('Y-m-d'),
                'keterangan' => $this->keterangan,
                'foto_bukti' => $this->foto_bukti ? $this->foto_bukti->storeAs('upload', $nama_file) : $this->preview_foto,
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
