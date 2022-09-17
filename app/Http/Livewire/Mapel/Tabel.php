<?php

namespace App\Http\Livewire\Mapel;

use App\Models\Akademik\Mapel;
use App\Traits\KonfirmasiHapus;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;
    protected $model = Mapel::class;

    protected $listeners = [
        'mapelDitambah' => 'handleMapelDitambah',
        'mapelDiperbarui' => 'handleMapelDiperbarui',
        'hapus' => 'dihapus',
    ];

    public function dihapus()
    {
        if ($this->model_id){
            $mapel = Mapel::find($this->model_id);
            $mapel->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }
    }

    public function handleMapelDiperbarui($mapel)
    {
        return $mapel;
    }

    public function handleMapelDitambah($mapel)
    {
        return $mapel;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()->deselected(),
            Column::make('Kode', 'kode')
                ->sortable(),
            Column::make('Nama', 'nama')
                ->sortable()->searchable(),
             Column::make('Dibuat Oleh', 'pembuat.name')
                ->sortable()->searchable(),
            Column::make("Dibuat Pada", "created_at")
                ->sortable(),
            Column::make("Terakhir Diedit", "updated_at")
                ->sortable(),
            Column::make('Opsi', 'id')->format(function ($id){
                return view('tombol-aksi', [
                    'id' => $id,
                    'editWithModal' => 'mapel.edit',
                    'hapus' => $id
                ]);
            })->excludeFromColumnSelect()
        ];
    }
}
