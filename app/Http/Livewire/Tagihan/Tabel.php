<?php

namespace App\Http\Livewire\Tagihan;

use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Tagihan;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class Tabel extends DataTableComponent
{
    protected $model = Tagihan::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()->deselected(),
            Column::make('Tgl. Dibuat', 'tgl_dibuat')->format(fn ($tanggal) => Carbon::parse($tanggal)->format('d F, Y')),
            Column::make('Nama Siswa', 'santri.nama_lengkap'),
            Column::make('Kategori', 'kategori.nama_kategori'),
            Column::make('Jumlah', 'total_tagihan')->format(fn ($total) => rupiah($total)),
            Column::make('Status', 'status')->format(function ($status){
                return view('_partials.boolean-status', [
                    'status' => $status
                ]);
            }),
            Column::make("Jatuh Tempo", "tgl_jatuh_tempo")
                ->format(fn ($tanggal) => Carbon::parse($tanggal)->format('d F, Y'))
                ->sortable(),
        ];
    }
}
