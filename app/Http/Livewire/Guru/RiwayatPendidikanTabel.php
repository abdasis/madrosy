<?php

namespace App\Http\Livewire\Guru;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RiwayatPendidikan;

class RiwayatPendidikanTabel extends DataTableComponent
{

    public function mount($id)
    {
        $this->guru_id = $id;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->deselected(),
            Column::make("Nama Sekolah", "nama_sekolah")
                ->searchable()
                ->sortable(),
            Column::make('Jurusan', 'jurusan')
                ->searchable()
                ->sortable(),
            Column::make('Alamat Sekolah')->searchable()->sortable(),
            Column::make('Tahun Lulus', 'tahun_lulus')
                ->format(fn($tahun_lulus) => Carbon::parse($tahun_lulus)->format('d F, Y')),
            Column::make('Tahun Masuk', 'tahun_masuk')
                ->format(fn($tahun_masuk) => Carbon::parse($tahun_masuk)->format('d F, Y')),

        ];
    }

    public function builder():Builder
    {
        return RiwayatPendidikan::query()->where('guru_id', $this->guru_id);
    }
}
