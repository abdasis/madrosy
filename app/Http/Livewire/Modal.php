<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{

    public $title;
    public $body;
    public $model;

    protected $listeners = [
        'modalTambah' => 'bukaModalTambah',
        'editModal' => 'bukaModalEdit',
    ];

    public function bukaModalTambah($data)
    {
        $this->title = 'Tambah Data';
        $this->body = $data;
        $this->emit('modalOpen');
    }

    public function bukaModalEdit($data, $model)
    {
        $this->title = 'Edit Data ' . $model;
        $this->body = $data;
        $this->model = $model;
        $this->emit('modalOpen');
    }
    public function render()
    {
        return view('livewire.modal');
    }
}
