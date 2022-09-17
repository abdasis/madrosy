<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Akademik\Kelas;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class PindahKelasForm extends Component
{
    use LivewireAlert;

    public $siswa_terpilih = [];
    public $kelas_id;

    public function mount()
    {
        if (\Session::get('data_santri')){
            $this->siswa_terpilih = \Session::get('data_santri');
        }else{
            $this->siswa_terpilih = [];
        }
    }

    public function simpan()
    {
        //membuat array santri untuk di asosiasikan ke kelas baru
        foreach ($this->siswa_terpilih as $santri){
            $santri->kelas()->sync($this->kelas_id);
        }

        //hapus session siswa yang terpilih
        \Session::forget('data_santri');

        //redirect ke halaman kelas
        $this->flash('success', 'Data berhasil di pindah kelas', [], route('kelas.semua'));
    }

    public function render()
    {
        return view('livewire.kelas.pindah-kelas-form',[
            'data_kelas' => Kelas::get(),
        ]);
    }
}
