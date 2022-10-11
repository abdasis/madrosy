<?php

namespace App\Http\Livewire\Presensi;

use App\Models\Kesiswaan\Absensi;
use Livewire\Component;

class LaporanPresensi extends Component
{
    public $bulan;

    public function render()
    {
        $absensi = Absensi::get()->groupBy(function ($item) {
            return $item->created_at->format('d/m/y');
        });

        return view('livewire.presensi.laporan-presensi', [
            'data_absensi' => $absensi
        ]);
    }
}
