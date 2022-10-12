<?php

namespace App\Http\Livewire\Presensi;

use App\Models\Akademik\Jadwal;
use App\Models\Akademik\Mapel;
use App\Models\Kesiswaan\Absensi;
use Livewire\Component;

class LaporanPresensi extends Component
{
    public $bulan;

    public function render()
    {
        $data_jadwal = Jadwal::latest()->where('guru_id', auth()->id())
            ->with('mapel')
            ->get();

        return view('livewire.presensi.laporan-presensi', [
            'data_mapel' => $data_jadwal
        ]);
    }
}
