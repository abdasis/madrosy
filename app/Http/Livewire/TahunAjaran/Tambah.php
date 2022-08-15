<?php

namespace App\Http\Livewire\TahunAjaran;

use App\Helpers\Alert;
use App\Models\TahunAjaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $tahun_awal;
    public $tahun_akhir;
    public $status;

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
            TahunAjaran::create([
                'tahun_awal' => $this->tahun_awal,
                'tahun_akhir' => $this->tahun_akhir,
                'status' => $this->status
            ]);
            $this->alert('success', 'Tahun Ajaran berhasil ditambahkan');
            $this->reset();
        }catch (\Exception $e) {
            dd($e);
            $this->alert('error', 'Tahun ajaran gagal ditambahkan');
        }
    }

    public function render()
    {
        return view('livewire.tahun-ajaran.tambah');
    }
}
