<?php

namespace App\Http\Livewire\Santri;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Santri;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class Tabel extends DataTableComponent
{
    protected $model = Santri::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Jenis Kelamin')
                ->options([
                    '' => 'Semua',
                    'Perempuan' => 'Perempuan',
                    'Laki-Laki' => 'Laki-Laki',
                ])->filter(function (Builder $query, $value) {
                    if ($value) {
                        $query->where('jenis_kelamin', $value);
                    }
                }),
        ];
    }


    public function columns(): array
    {
        return [
            Column::make("Nama", "nama_lengkap")
                ->searchable()
                ->sortable(),
            Column::make("NISN", "nisn")
                ->searchable()
                ->sortable(),
            Column::make("Jenis Kelamin", "jenis_kelamin")
                ->searchable()
                ->sortable(),
            Column::make("Tempat Lahir", "tempat_lahir")
                ->searchable()
                ->sortable(),
            Column::make("Tanggal Lahir", "tanggal_lahir")
                ->searchable()
                ->format(fn($tanggal_lahir) => Carbon::parse($tanggal_lahir)->format('d F Y'))
                ->sortable(),
            Column::make('Agama', 'agama')
                ->searchable()
                ->sortable(),
            Column::make('Status Keluarga', 'status_keluarga')
                ->searchable()
                ->sortable(),
            Column::make('Anak Ke', 'anak_ke')
                ->searchable()
                ->sortable(),
            Column::make('Jumlah Saudara', 'jumlah_saudara')
                ->searchable()
                ->sortable(),
        ];
    }
}
