<?php

namespace App\Http\Livewire\Guru;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Guru;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class Tabel extends DataTableComponent
{
    protected $model = Guru::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("NIK", "NIK")
                ->sortable(),
            Column::make('Nama Lengkap', 'nama')
                ->sortable()
                ->searchable(),
            Column::make('Jabatan', 'jabatan')
                ->sortable()
                ->searchable(),
            Column::make('Status', 'status_guru')
                ->sortable()
                ->searchable(),
            Column::make('No. HP', 'no_hp')
                ->sortable()
                ->searchable(),
            BooleanColumn::make('Active', 'status')
                ->sortable()
                ->searchable(),
        ];
    }
}
