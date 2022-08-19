<?php

namespace App\Http\Livewire\Kelas;

use App\Traits\KonfirmasiHapus;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Kelas;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $model = Kelas::class;

    protected $listeners = ['kelasDitambah', 'hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id){
            $kelas = Kelas::find($this->model_id);
            $kelas->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('error', 'Data tidak ditemukan');
        }
    }

    public function kelasDitambah($kelas)
    {
        return $kelas;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function edit($id)
    {
        $this->emit('editModal', [
            'title' => 'Edit Data',
            'body' => 'kelas.edit',
            'model' => $id,
            'status' => 'edit',
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Kode Kelas')
                ->searchable()
                ->sortable(),
            Column::make('Nama Kelas')
                ->searchable()
                ->sortable(),
            Column::make("Dibuat Oleh", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Opsi', 'id')->format(function ($id){
                return view('tombol-aksi', [
                    'id' => $id,
                    'editWithModal' => 'kelas.edit',
                    'hapus' => $id
                ]);
            })->excludeFromColumnSelect()
        ];
    }
}
