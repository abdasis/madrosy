<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Kelas;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{

    use LivewireAlert;
    public $kode_kelas;
    public $nama_kelas;
    public $model_id;

    public function rules()
    {
        return[
            'kode_kelas' => 'required|unique:kelas,kode_kelas',
            'nama_kelas' => 'required',
        ];
    }

    public function mount($model_id)
    {
        $total_kelas = Kelas::count();
        $this->kode_kelas = 'KLS'.str_pad($total_kelas + 1, 5, '0', STR_PAD_LEFT);
        $kelas = Kelas::find($model_id);
        $this->kode_kelas = $kelas->kode_kelas;
        $this->nama_kelas = $kelas->nama_kelas;
        $this->model_id = $kelas->id;
    }

    public function simpan()
    {
        dd($this->model_id);
        $this->validate();
        try {
            $kelas = Kelas::create([
                'kode_kelas' => $this->kode_kelas,
                'nama_kelas' => $this->nama_kelas,
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
        return view('livewire.kelas.edit');
    }
}
