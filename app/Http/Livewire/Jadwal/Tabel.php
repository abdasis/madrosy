<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Akademik\Jadwal;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabel extends DataTableComponent
{
    protected $model = Jadwal::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Mata Pelajaran', 'mapel.nama')
                ->sortable(),
            Column::make('Kelas', 'kelas.nama_kelas')
                ->sortable(),
            Column::make('Guru', 'guru.nama')
                ->sortable(),
            Column::make('Hari', 'hari')->sortable(),
            Column::make('Mulai', 'jam_mulai'),
            Column::make('Selesai', 'jam_selesai'),
            Column::make("Dibuat Pada", "created_at")
                ->sortable()->deselected(),
            Column::make("Terakhir Diubah", "updated_at")
                ->sortable()->deselected(),
        ];
    }
}
