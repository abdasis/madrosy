<?php

namespace App\Http\Livewire\TahunAjaran;

use App\Models\TahunAjaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{

    use LivewireAlert;

    public $tahun_awal;
    public $tahun_akhir;
    public $status;
    public $tahun_ajaran_id;

    public function mount(TahunAjaran $tahun_ajaran)
    {
        $this->tahun_awal = $tahun_ajaran->tahun_awal;
        $this->tahun_akhir = $tahun_ajaran->tahun_akhir;
        $this->status = $tahun_ajaran->status;
        $this->tahun_ajaran_id = $tahun_ajaran->id;
    }
    public function rules()
    {
        return[
            'tahun_awal' => 'required',
            'tahun_akhir' => 'required|after:tahun_awal',
            'status' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            TahunAjaran::where('id', $this->tahun_ajaran_id)->update([
                'tahun_awal' => $this->tahun_awal,
                'tahun_akhir' => $this->tahun_akhir,
                'status' => $this->status
            ]);
            $this->alert('success', 'Tahun ajaran berhasil di perbarui');
        }catch (\Exception $e) {
            $this->alert('error', 'Gagal memperbarui tahun ajaran');
        }
    }

    public function render()
    {
        return view('livewire.tahun-ajaran.edit');
    }
}
