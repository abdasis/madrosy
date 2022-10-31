<?php

namespace App\Http\Livewire\Log;

use App\Models\Akademik\Jadwal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AbsensiGuru;
use Spatie\Activitylog\Models\Activity;

class Tabel extends DataTableComponent
{
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Pada", "created_at")->format(fn($tanggal) => Carbon::parse($tanggal)->diffForHumans())
                ->sortable(),
            Column::make('Dibuat', 'id')->format(function ($id, $model) {
                return Activity::find($id)->causer->name;
            }),
            Column::make("Event", "event")
                ->sortable(),
            Column::make('Deskripsi', 'description'),
            Column::make('Tanggal', 'created_at')->format(fn($tanggal) => Carbon::parse($tanggal)->format('d/m/Y'))
        ];
    }

    public function builder(): Builder
    {
        return Activity::query();
    }
}
