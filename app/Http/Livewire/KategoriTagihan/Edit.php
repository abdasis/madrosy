<?php

namespace App\Http\Livewire\KategoriTagihan;

use App\Models\Akademik\TahunAjaran;
use App\Models\Keuangan\KategoriTagihan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;

    public $nama_kategori;
    public $jenis_tagihan;
    public $cicilan;
    public $tahun_ajaran_id;
    public $keterangan;

    public $kategori_id;

    public function mount(KategoriTagihan $kategori_tagihan)
    {

        $this->nama_kategori = $kategori_tagihan->nama_kategori;
        $this->jenis_tagihan = $kategori_tagihan->jenis_tagihan;
        $this->cicilan = $kategori_tagihan->cicilan;
        $this->tahun_ajaran_id = $kategori_tagihan->tahun_ajaran_id;
        $this->keterangan = $kategori_tagihan->keterangan;
        $this->kategori_id = $kategori_tagihan->id;
    }
    public function rules()
    {
        return[
            'nama_kategori' => 'required|string|max:255',
            'jenis_tagihan' => 'required|string|max:255',
            'cicilan' => 'required|boolean',
            'tahun_ajaran_id' => 'required|integer',
            'keterangan' => 'nullable|string|max:255',
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
            $kategori_tagihan = KategoriTagihan::where('id', $this->kategori_id)->update([
                'nama_kategori' => $this->nama_kategori,
                'jenis_tagihan' => $this->jenis_tagihan,
                'cicilan' => $this->cicilan,
                'tahun_ajaran_id' => $this->tahun_ajaran_id,
                'keterangan' => $this->keterangan,
            ]);
            $this->alert('success', 'Data berhasil diperbarui');
        }catch (\Exception $e) {
            $this->alert('error','Data gagal diperbarui');
        }
    }
    public function render()
    {
        return view('livewire.kategori-tagihan.edit',[
            'semua_tahun_ajaran' => TahunAjaran::orderBy('tahun_awal','desc')->get()
        ]);
    }
}
