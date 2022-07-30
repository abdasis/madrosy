<?php

namespace App\Http\Livewire\RiwayatPendidikan;

use App\Models\Guru;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $guru_id;
    public $nama_sekolah;
    public $alamat_sekolah;
    public $tahun_lulus;
    public $tahun_masuk;
    public $jurusan;

    public function rules()
    {
        return [
            'guru_id' => 'required|numeric',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'tahun_lulus' => 'required',
            'tahun_masuk' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'guru_id.required' => 'Guru harus diisi',
            'nama_sekolah.required' => 'Nama sekolah harus diisi',
            'alamat_sekolah.required' => 'Alamat sekolah harus diisi',
            'tahun_lulus.required' => 'Tahun lulus harus diisi',
            'tahun_lulus.date' => 'Tahun lulus harus berupa tanggal',
            'tahun_lulus.max' => 'Tahun lulus harus berupa tanggal',
            'tahun_lulus.min' => 'Tahun lulus harus berupa tanggal',
            'tahun_masuk.required' => 'Tahun masuk harus diisi',
            'tahun_masuk.date' => 'Tahun masuk harus berupa tanggal',
            'tahun_masuk.max' => 'Tahun masuk harus berupa tanggal',
            'tahun_masuk.min' => 'Tahun masuk harus berupa tanggal',
            'guru_id.numeric' => 'Guru harus berupa angka',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {

            $guru = Guru::find($this->guru_id);

            $guru->pendidikan()->create([
                'nama_sekolah' => $this->nama_sekolah,
                'alamat_sekolah' => $this->alamat_sekolah,
                'tahun_lulus' => Carbon::parse($this->tahun_lulus)->format('Y-m-d'),
                'jurusan' => $this->jurusan,
                'tahun_masuk' => Carbon::parse($this->tahun_masuk)->format('Y-m-d'),
            ]);

            $this->alert('success', 'Berhasil menambahkan Data');
        }catch (\Exception $e) {
            dd($e);
            $this->alert('warning', 'Kesalahan dalam menyimpan Data');
        }
    }

    public function render()
    {

        $semua_guru = Guru::orderBy('nama', 'asc')->get();
        return view('livewire.riwayat-pendidikan.tambah', [
            'semua_guru' => $semua_guru
        ]);
    }
}
