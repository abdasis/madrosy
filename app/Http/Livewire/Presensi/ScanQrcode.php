<?php

namespace App\Http\Livewire\Presensi;

use App\Models\AbsensiGuru;
use App\Models\Akademik\Jadwal;
use App\Models\Akademik\Kelas;
use App\Models\Commons\Qrcode;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ScanQrcode extends Component
{

    use LivewireAlert;

    protected $listeners = ['discan' => 'handleScan'];

    public function handleScan($kode)
    {
        try {
            $hari_ini = Carbon::now()->isoFormat('dddd');

            $jadwal_hari_ini = Jadwal::where('guru_id', auth()->user()->guru->id)
                ->where('hari', $hari_ini)
                ->where('status', 'aktif')
                ->get()
                ->map(function ($jadwal) {
                    $jam_sekarang = Carbon::createFromTimeString(now()->format('H:i'));
                    $jam_mulai = Carbon::createFromTimeString($jadwal->jam_mulai);
                    $jam_selesai = Carbon::createFromTimeString($jadwal->jam_selesai);
                    if ($jam_sekarang->gte($jam_mulai) && $jam_sekarang->lte($jam_selesai)) {
                        return $jadwal;
                    } else {
                        return [];
                    }
                })->whereNotNull()->first();

            if ($jadwal_hari_ini) {

                $kelas = Kelas::whereHas('qrcodes', function ($query) use ($kode) {
                    return $query->where('kode', $kode);
                })->first();

                if ($jadwal_hari_ini->kelas_id != $kelas->id) {
                    $this->emit('salahKelas');
                    session()->flash('salah_kelas', 'Maaf, anda saat ini tidak mempunya jadwal pada kelas ini');
                    return false;
                }


                $absensi = AbsensiGuru::max('id');

                $kode_absensi = "AB-" . str_pad($absensi + 1, 8, 0, STR_PAD_LEFT);

                AbsensiGuru::create([
                    'kode_absensi' => $kode_absensi,
                    'jadwal_id' => $jadwal_hari_ini->id,
                    'guru_id' => auth()->user()->guru->id,
                    'waktu_absensi' => now(),
                    'kode_qr' => $kode
                ]);

                $this->flash('success', 'Berhasil', [], route('presensi.daftar-siswa', $jadwal_hari_ini->id));
                $this->emit('berhasilScan');
            } else {
                $this->emit('jadwalKosong');
                session()->flash('jadwal_kosong', 'Maaf, tidak ada jadwal yang ditemukan pada hari ini');
                return false;
            }

        } catch (\Exception $exception) {
            report($exception);
            $this->alert('warning', 'Kesalahan', [
                'text' => 'Terjadi kesalahaan saat melakukan absensi'
            ]);
        }


    }

    public function render()
    {
        return view('livewire.presensi.scan-qrcode');
    }
}
