<?php

namespace App\Http\Livewire\Pelanggaran;

use Livewire\Component;

class Semua extends Component
{
    public $editStatus = false;
    protected $listeners = ['editPelanggaran' => 'handleEditPelanggaran'];

    public function tambahModal()
    {
        $this->emit('tambahModal');
    }

    public function handleEditPelanggaran($pelanggaran)
    {
        $this->editStatus = true;
        $this->emit('getDataPelanggaran', $pelanggaran);
    }
    public function render()
    {
        return view('livewire.pelanggaran.semua');
    }
}
