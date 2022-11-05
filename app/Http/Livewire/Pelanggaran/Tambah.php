<?php

namespace App\Http\Livewire\Pelanggaran;

use App\Http\Livewire\Modal;
use App\Models\Kesiswaan\Pelanggaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Tambah extends Modal
{
    use LivewireAlert;

    public $kasus;
    public $bobot;

    protected $listeners = ['tambah' => 'show'];

    public function show()
    {
        $this->emit('modalTambah', 'tambah-kelas');
    }


    public function rules()
    {
        return [
            'kasus' => 'required|string|min:5',
            'bobot' => 'required|integer|min:1|max:100',
        ];
    }


    public function messages()
    {
        return [
            'kasus.required' => 'Kasus harus diisi',
            'kasus.string' => 'Kasus harus berupa string',
            'kasus.min' => 'Kasus minimal 5 karakter',
            'bobot.required' => 'Bobot harus diisi',
            'bobot.integer' => 'Bobot harus berupa integer',
            'bobot.min' => 'Bobot minimal 1',
            'bobot.max' => 'Bobot maksimal 100',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $pelanggaran = Pelanggaran::create([
                'kasus' => $this->kasus,
                'bobot' => $this->bobot,
                'dibuat_oleh' => auth()->id(),
                'diedit_oleh' => auth()->id(),
            ]);

            $this->emit('tambahPelanggaran', $pelanggaran);
            $this->reset();
        } catch (\Exception $e) {
            report($e);
            $this->alert('warning', 'Kesalahan saat  menyimpan data');
        }
    }

    public function render()
    {
        return view('livewire.pelanggaran.tambah');
    }
}
