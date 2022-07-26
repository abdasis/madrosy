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
        $this->setPrimaryKey('id')
        ->setTableRowUrl(function ($model) {
            return route('guru.detail', $model->id);
        });

        $this->setDefaultReorderSort('order', 'desc');

    }

    public function columns(): array
    {
        return [
            Column::make('id')->sortable(),
            Column::make("NIK", "nik")
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
            BooleanColumn::make('Active', 'status'),
        ];
    }
}
