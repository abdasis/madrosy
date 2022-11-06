<?php

namespace App\Http\Livewire\Santri;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AbsensiGuru;

class Konseling extends DataTableComponent
{

    public $santri_id;

    public function mount($id)
    {
        $this->santri_id = $id;
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
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }

    public function builder(): Builder
    {
        return \App\Models\Kesiswaan\Konseling::query()->where('santri_id', $this->santri_id);
    }
}
