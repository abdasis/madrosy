<?php

namespace App\Http\Livewire\Kelas;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Kelas;

class Tabel extends DataTableComponent
{
    protected $model = Kelas::class;

    protected $listeners = ['kelasDitambah'];

    public function kelasDitambah($kelas)
    {
        return $kelas;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
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
