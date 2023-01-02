<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Akademik\Jadwal;
use App\Models\Akademik\Kelas;
use App\Models\Akademik\Mapel;
use App\Models\Kepegawaian\Guru;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $kode;
    public $kelas;
    public $guru;
    public $mapel;
    public $jam_mulai;
    public $jam_selesai;
    public $hari;

    public function mount()
    {
        $max_jadwal = Jadwal::max('id');
        $this->kode = 'JDW-' . str_pad($max_jadwal + 1, 5, '0', STR_PAD_LEFT);
    }

    public function rules()
    {
        return[
            'kode' => 'required|unique:jadwals,kode',
            'kelas' => 'required',
            'guru' => 'required',
            'mapel' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            \DB::beginTransaction();

            $jadwal = Jadwal::where('mapel_id', $this->mapel)
                ->where('kelas_id', $this->kelas)
                ->where('hari', $this->hari)
                ->where('guru_id', $this->guru)
                ->exists();

            if ($jadwal){
                session()->flash('message', 'Jadwal yang anda masukan sudah pernah ditambahkan sebelumnya, anda tidak
                bisa menambahkan jadwal yang sama');
                return $this->mount();
            }

            Jadwal::create([
                'kode' => $this->kode,
                'mapel_id' => $this->mapel,
                'kelas_id' => $this->kelas,
                'guru_id' => $this->guru,
                'hari' => $this->hari,
                'jam_mulai' => $this->jam_mulai,
                'jam_selesai' => $this->jam_selesai,
                'status' => 'aktif',
            ]);
            $this->alert('success', 'Data berhasil disimpan');
            \DB::commit();
        }catch (\Exception $e) {
            \DB::rollback();
            $this->alert('warning', 'Terjadi kesalahan saat menyimpan data');
        }
    }

    public function render()
    {
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        return view('livewire.jadwal.tambah', [
            'data_kelas' => Kelas::orderBy('nama_kelas', 'asc')->get(),
            'data_guru' => Guru::orderBy('nama', 'asc')->get(),
            'data_pelajaran' => Mapel::orderBy('nama', 'asc')->get(),
            'data_hari' => $hari,
        ]);
    }
}
