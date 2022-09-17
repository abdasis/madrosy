<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Tagihan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabel extends DataTableComponent
{
    protected $model = Tagihan::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')->setTableRowUrl(function ($row) {
            Log::debug($row);
            return route('tagihan.detail', $row->kode_tagihan);
        });
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()->deselected(),
            Column::make('kode', 'kode_tagihan')->sortable()->deselected(),
            Column::make('Tgl. Dibuat', 'tgl_dibuat')->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y')),
            Column::make('Nama Siswa', 'santri.nama_lengkap'),
            Column::make('Kategori', 'kategori.nama_kategori'),
            Column::make('Jumlah', 'total_tagihan')->format(fn($total) => rupiah($total)),
            Column::make('Status', 'status')->format(function ($status) {
                return view('_partials.boolean-status', [
                    'status' => $status
                ]);
            }),
            Column::make("Jatuh Tempo", "tgl_jatuh_tempo")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y'))
                ->sortable(),
        ];
    }
}
