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
    }

    public function closeModal()
    {
        $this->reset();
    }

    public function bukaModalEdit($data, $model)
    {

        $this->reset();
        $this->title = 'Edit Data ';
        $this->body = $data;
        $this->model = $model;
    }
    public function render()
    {
        return view('livewire.modal');
    }
}
