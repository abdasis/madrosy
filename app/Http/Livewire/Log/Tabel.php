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
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Pada", "created_at")->format(fn($tanggal) => Carbon::parse($tanggal)->diffForHumans())
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }

    public function builder(): Builder
    {
        return Activity::query();
    }
}
