<?php

namespace App\Http\Livewire\Presensi;

use App\Models\Akademik\Jadwal;
use App\Models\Kesiswaan\Absensi;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DaftarSiswa extends Component
{
    use LivewireAlert;
    public $jadual;
    public $status;
    public $santri_id;
    public $keterangan;
    public $sudah_absen;

    public function mount()
    {
        $hari_ini = Carbon::now()->isoFormat('dddd');
        $jadual = Jadwal::where('hari', $hari_ini)
            ->where('guru_id', auth()->id())
            ->where('status', 'aktif')
            ->whereTime('jam_mulai', '<=', Carbon::now()->format('H:i:s'))
            ->whereTime('jam_selesai', '>=', Carbon::now()->format('H:i:s'))
            ->first();

        $this->jadual = $jadual;
    }

    public function cekAbsen($santri_id)
    {
        return Absensi::where('santri_id', $santri_id)
            ->where('jadwal_id', $this->jadual->id)
            ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
            ->first();
    }

    public function batalkan($absen_id)
    {
        $absensi = Absensi::find($absen_id);
        if ($absensi){
            $absensi->delete();
            $this->alert('success', 'Absensi dibatalkan');
        }else{
            $this->alert('error', 'Absensi tidak ditemukan');
        }
    }

    public function absen($siswa_id, $status, $key)
    {
        try {
            Absensi::create([
                'jadwal_id' => $this->jadual->id,
                'santri_id' => $siswa_id,
                'status' => $status,
                'keterangan' => $this->keterangan[$key] ?? 'tidak ada keterangan',
            ]);

            $this->alert('success', 'Berhasil Absen');
        }catch (\Exception $e){
            $this->alert('error', 'Gagal Absen');
        }
    }

    public function render()
    {
        return view('livewire.presensi.daftar-siswa');
    }
}
