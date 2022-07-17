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
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($id) {
                return route('santri.detail', $id);
            });
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
            Column::make('#', 'id')->searchable()->sortable(),
            Column::make("NISN", "nisn")
                ->searchable()
                ->sortable(),
            Column::make("Nama", "nama_lengkap")
                ->searchable()
                ->html()
                ->format(function ($nama){
                    return "<span class='fw-bold text-dark'>$nama</span>";
                })
                ->sortable(),
            Column::make("Jenis Kelamin", "jenis_kelamin")
                ->searchable()
                ->unclickable()
                ->sortable(),
            Column::make("Tempat Lahir", "tempat_lahir")
                ->searchable()
                ->unclickable()
                ->sortable(),
            Column::make("Tanggal Lahir", "tanggal_lahir")
                ->searchable()
                ->unclickable()
                ->format(fn($tanggal_lahir) => Carbon::parse($tanggal_lahir)->format('d F Y'))
                ->sortable(),
            Column::make('Agama', 'agama')
                ->searchable()
                ->unclickable()
                ->sortable(),
            Column::make('Status Keluarga', 'status_keluarga')
                ->searchable()
                ->unclickable()
                ->sortable(),
            Column::make('Anak Ke', 'anak_ke')
                ->searchable()
                ->unclickable()
                ->sortable(),
            Column::make('Jumlah Saudara', 'jumlah_saudara')
                ->searchable()
                ->unclickable()
                ->sortable(),
            Column::make('Aksi', 'id')
                ->html()
                ->format(function ($id) {
                    return view('tombol-aksi', [
                        'edit' => route('santri.edit', $id),
                        'hapus' => $id
                    ]);
                })
                ->sortable()
                ->unclickable()
                ->excludeFromColumnSelect(),
        ];
    }
}
