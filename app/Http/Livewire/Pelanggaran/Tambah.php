<?php

namespace App\Http\Livewire\Pelanggaran;

use App\Models\Akademik\Pelanggaran;
use Livewire\Component;

class Tambah extends Component
{
    public $kasus;
    public $bobot;

    public function rules()
    {
        return[
            'kasus' => 'required|string|min:5',
            'bobot' => 'required|integer|min:1|max:100',
        ];
    }

    public function messages()
    {
        return[
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
            ]);

            $this->emit('tambahPelanggaran', $pelanggaran);

            $this->reset();

        }catch (\Exception $e) {
            $this->alert('warning', 'Kesalahan saat  menyimpan data');
        }
    }

    public function render()
    {
        return view('livewire.pelanggaran.tambah');
    }
}
