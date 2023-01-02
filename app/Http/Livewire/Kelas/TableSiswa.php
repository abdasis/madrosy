<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Akademik\Kelas;
use App\Models\Kesiswaan\Santri;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AbsensiGuru;

class TableSiswa extends DataTableComponent
{

    public $kelas_id;

    public function mount($kelas_id)
    {
        $this->kelas_id = $kelas_id;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("NISN", "nisn")
                ->searchable()
                ->sortable(),
            Column::make('Nama Lengkap', 'nama_lengkap')
                ->searchable()
                ->sortable(),
            Column::make("Alamat", "alamat")
                ->searchable(),

        ];
    }

    public function builder(): Builder
    {
        return Santri::query()->whereHas('kelas', function ($query) {
            return $query->where('id', $this->kelas_id);
        });
    }
}
