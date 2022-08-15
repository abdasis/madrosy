<?php

namespace App\Http\Livewire\KategoriTagihan;

use App\Models\KategoriTagihan;
use App\Models\TahunAjaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $nama_kategori;
    public $jenis_tagihan;
    public $cicilan;
    public $tahun_ajaran_id;
    public $keterangan;

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
            $kategori_tagihan = KategoriTagihan::create([
                'nama_kategori' => $this->nama_kategori,
                'jenis_tagihan' => $this->jenis_tagihan,
                'cicilan' => $this->cicilan,
                'tahun_ajaran_id' => $this->tahun_ajaran_id,
                'keterangan' => $this->keterangan,
            ]);
            $this->alert('success', 'Data berhasil disimpan');
            $this->reset();
        }catch (\Exception $e) {
            $this->alert('error','Data gagal disimpan');
        }
    }
    public function render()
    {
        return view('livewire.kategori-tagihan.tambah',[
            'semua_tahun_ajaran' => TahunAjaran::orderBy('tahun_awal','desc')->get()
        ]);
    }
}
