<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Kesiswaan\Santri;
use App\Models\Keuangan\KategoriTagihan;
use App\Models\Keuangan\Tagihan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;

    public $tagihan;
    public $santri_id;
    public $kategori_tagihan_id;
    public $kode_tagihan;
    public $tgl_dibuat;
    public $tgl_jatuh_tempo;
    public $total_tagihan;
    public $keterangan;

    public function mount(Tagihan $tagihan)
    {
        $this->tagihan = $tagihan;
        $this->fill([
            'santri_id' => $tagihan->santri_id,
            'kategori_tagihan_id' => $tagihan->kategori_tagihan_id,
            'kode_tagihan' => $tagihan->kode_tagihan,
            'tgl_dibuat' => $tagihan->tgl_dibuat,
            'tgl_jatuh_tempo' => $tagihan->tgl_jatuh_tempo,
            'total_tagihan' => $tagihan->total_tagihan,
            'keterangan' => $tagihan->keterangan,
        ]);
    }

    public function rules()
    {
        return [
            'santri_id' => 'required',
            'kategori_tagihan_id' => 'required',
            'tgl_dibuat' => 'required|date',
            'tgl_jatuh_tempo' => 'required|gte:tgl_dibuat|date',
            'total_tagihan' => 'required|numeric',
            'keterangan' => 'required|string'
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field); //memberikan validasi setiap form yang di update
    }

    public function simpan()
    {
        try {
            $tagihan = Tagihan::find($this->tagihan->id);

            $tagihan->update([
                'tgl_dibuat' => $this->tgl_dibuat,
                'tgl_jatuh_tempo' => $this->tgl_jatuh_tempo,
                'total_tagihan' => $this->total_tagihan,
                'keterangan' => $this->keterangan,
            ]);

            $this->alert('success', 'Data tagihan di perbarui');

        } catch (\Exception $exception) {
            report($exception);
            $this->alert('error', 'Terjadi kesalahaan saat mengubah data');
        }
    }

    public function render()
    {
        return view('livewire.tagihan.edit', [
            'data_siswa' => Santri::orderBy('nama_lengkap', 'asc')->get(),
            'data_kategori_tagihan' => KategoriTagihan::orderBy('nama_kategori', 'asc')->get()
        ]);
    }
}
