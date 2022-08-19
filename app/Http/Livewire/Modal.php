<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    protected $listeners = [
        'tambah' => 'tambah',
        'edit' => 'edit'
    ];

    public function tambah()
    {
        $this->emit('modalTambah');
    }

    public function edit($id)
    {
        $this->emit('modalEdit', [
            'modal' => 'edit-kelas',
            'id' => $id
        ]);
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
