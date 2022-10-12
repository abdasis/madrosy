<?php

namespace App\Http\Livewire\Presensi;

use App\Models\Akademik\Jadwal;
use Livewire\Component;

class IsiLaporan extends Component
{

    public $data_jadwal = [];
    public function mount(Jadwal $jadwal)
    {
        $jadwal = $jadwal->kelas->santri->map(function ($item){
            return[
                'santri' => $item->nama_lengkap,
                'data_absensi' => $item->data_absensi->map(function ($item){
                    return[
                        'tanggal' => $item->created_at->format('d/m/y'),
                        'status' => $item->status
                    ];
                })->toArray(),
                'total_hadir' => $item->data_absensi()->where('status', 'hadir')->count(),
                'total_sakit' => $item->data_absensi()->where('status', 'sakit')->count(),
                'total_alpa' => $item->data_absensi()->where('status', 'alpa')->count(),
                'total_izin' => $item->data_absensi()->where('status', 'izin')->count()
            ];
        })->toArray();

        $this->data_jadwal = $jadwal;
    }

    public function render()
    {
        return view('livewire.presensi.isi-laporan');
    }
}
