<?php

namespace App\Http\Livewire\Santri;

use App\Models\Keuangan\Tagihan;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AbsensiGuru;

class TabelTagihan extends DataTableComponent
{
    public $santri_id;

    public function mount($id)
    {
        $this->santri_id = $id;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row){
               return route('tagihan.detail', $row);
            });
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->deselected()
                ->sortable(),
            Column::make("Tgl. Dibuat", "tgl_dibuat")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d-m-Y'))
                ->sortable(),
            Column::make('Kode Tagihan'),
            Column::make('Keterangan'),
            Column::make('Status'),
            Column::make('Total Tagihan')->format(fn($total) => rupiah($total)),
        ];
    }

    public function builder(): Builder
    {
        return Tagihan::query()->where('santri_id', $this->santri_id);
    }
}
