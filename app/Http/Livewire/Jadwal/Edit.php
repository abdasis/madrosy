<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Akademik\Jadwal;
use App\Models\Akademik\Kelas;
use App\Models\Akademik\Mapel;
use App\Models\Kepegawaian\Guru;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;

    public $kode;
    public $kelas;
    public $guru;
    public $mapel;
    public $jam_mulai;
    public $jam_selesai;
    public $hari;
    public $jadwal_id;

    public function mount(Jadwal $jadwal)
    {
        $this->kode = $jadwal->kode;
        $this->kelas = $jadwal->kelas_id;
        $this->guru = $jadwal->guru_id;
        $this->mapel = $jadwal->mapel_id;
        $this->jam_mulai = Carbon::parse($jadwal->jam_mulai)->format('H:i');
        $this->jam_selesai = Carbon::parse($jadwal->jam_selesai)->format('H:i');
        $this->hari = $jadwal->hari;
        $this->jadwal_id = $jadwal->id;
    }

    public function rules()
    {
        return [
            'kode' => 'required|unique:jadwals,kode,'.$this->jadwal_id,
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
                ->get()->except($this->jadwal_id);

            if (count($jadwal) > 0) {
                session()->flash('message', 'Jadwal yang anda masukan sudah pernah ditambahkan sebelumnya, anda tidak
                bisa menambahkan jadwal yang sama');
            }

            Jadwal::find($this->jadwal_id)->update([
                'kode' => $this->kode,
                'mapel_id' => $this->mapel,
                'kelas_id' => $this->kelas,
                'guru_id' => $this->guru,
                'hari' => $this->hari,
                'jam_mulai' => $this->jam_mulai,
                'jam_selesai' => $this->jam_selesai,
                'status' => 'aktif',
            ]);
            $this->alert('success', 'Data berhasil diperbarui');
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
        }
    }
    function render()
    {
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Ahad'];
        return view('livewire.jadwal.edit', [
            'data_kelas' => Kelas::orderBy('nama_kelas', 'asc')->get(),
            'data_guru' => Guru::orderBy('nama', 'asc')->get(),
            'data_pelajaran' => Mapel::orderBy('nama', 'asc')->get(),
            'data_hari' => $hari,
        ]);
    }
}
