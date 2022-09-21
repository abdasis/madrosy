<?php

namespace App\Http\Livewire\Prensensi;

use App\Models\Akademik\Santri;
use Livewire\Component;

class LaporanPresensi extends Component
{

    public $data_santri;
    public $bulan;

    public function mount()
    {
        $this->data_santri = Santri::with('data_absensi')->whereHas('data_absensi', function ($query) {
            return $query->whereHas('jadwal', function ($query) {
                return $query->where('hari', 'Minggu');
            });
        })->get()->map(function ($santri) {
            return [
                'santri' => $santri->nama_lengkap,
                'nisn' => $santri->nisn,
                'senin' => $santri->data_absensi->where('jadwal.hari', 'Senin')->first()->status ?? '',
                'selasa' => $santri->data_absensi->where('jadwal.hari', 'Selasa')->first()->status ?? '',
                'rabu' => $santri->data_absensi->where('jadwal.hari', 'Rabu')->first()->status ?? '',
                'kamis' => $santri->data_absensi->where('jadwal.hari', 'Kamis')->first()->status ?? '',
                "jum'at" => $santri->data_absensi->where('jadwal.hari', "Jum'at")->first()->status ?? '',
                'sabtu' => $santri->data_absensi->where('jadwal.hari', 'Sabtu')->first()->status ?? '',
            ];
        });

        dd($this->data_santri);
    }

    public function render()
    {
        return view('livewire.prensensi.laporan-presensi');
    }
}
