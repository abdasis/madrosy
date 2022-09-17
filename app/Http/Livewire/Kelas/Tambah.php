<?php

namespace App\Http\Livewire\Kelas;

use App\Http\Livewire\Modal;
use App\Models\Akademik\Kelas;
use App\Models\Kepegawaian\Guru;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Tambah extends Modal
{
    use LivewireAlert;
    public $kode_kelas;
    public $nama_kelas;
    public $wali_kelas;

    public function rules()
    {
        return[
            'kode_kelas' => 'required|unique:kelas,kode_kelas',
            'nama_kelas' => 'required',
            'wali_kelas' => 'required'
        ];
    }

    protected $listeners = ['tambah' => 'show'];

    public function show()
    {
        $this->emit('modalTambah', 'tambah-kelas');
    }

    public function mount()
    {
        $total_kelas = Kelas::count();
        $this->kode_kelas = 'KLS'.str_pad($total_kelas + 1, 5, '0', STR_PAD_LEFT);
    }

    public function simpan()
    {
        $this->validate();
        try {
            $kelas = Kelas::create([
                'kode_kelas' => $this->kode_kelas,
                'nama_kelas' => $this->nama_kelas,
                'wali_kelas' => $this->wali_kelas,
            ]);
            $this->alert('success', 'Data berhasil ditambahkan');
            $this->emit('kelasDitambah', $kelas);
            $this->reset('nama_kelas');
            $this->mount();
        }catch (\Exception $e) {
            $this->alert('error', 'Data gagal ditambahkan');
        }
    }
    public function render()
    {
        return view('livewire.kelas.tambah',[
            'data_guru' => Guru::orderBy('nama', 'asc')->get()
        ]);
    }
}
