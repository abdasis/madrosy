<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Akademik\Jadwal;
use App\Models\Akademik\Kelas;
use Livewire\Component;

class Perminggu extends Component
{
    public $kelas;
    public $nama_kelas;

    public function mount()
    {
        $kelas = Kelas::first();

        if ($kelas->exists()) {
            $this->kelas = $kelas->id;
            $this->nama_kelas = $kelas->nama_kelas;
        }
    }
    public function updatedKelas($value)
    {
        $this->nama_kelas = Kelas::find($value)->nama_kelas;
    }

    public function render()
    {
        return view('livewire.jadwal.perminggu',[
            'data_jadwal' => Jadwal::orderBy('hari','desc')
                ->when($this->kelas, function ($query){
                    return $query->where('kelas_id', $this->kelas);
                })
                ->get()
                ->groupBy('hari'),
            'data_kelas' => Kelas::orderBy('nama_kelas','asc')->get(),
        ]);
    }
}
