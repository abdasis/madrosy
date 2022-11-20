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
                ->sortable()->deselected(),
            Column::make('kode', 'kode_tagihan')->sortable()->deselected(),
            Column::make('Tgl. Dibuat', 'tgl_dibuat')
                ->sortable()
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y')),
            Column::make('Kode Transaksi')->deselected(),
            Column::make('Nama Siswa', 'santri.nama_lengkap')->searchable(),
            Column::make('Kategori', 'kategori.nama_kategori'),
            Column::make('Status', 'status')->format(function ($id, $model, $row) {
                return view('_partials.boolean-status', [
                    'status' => $model->sisa_tagihan
                ]);
            }),
            Column::make("Jatuh Tempo", "tgl_jatuh_tempo")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y'))
                ->sortable(),
            Column::make('Jumlah', 'total_tagihan')->format(fn($total) => rupiah($total)),

        ];
    }

    public function builder(): Builder
    {
        return Tagihan::query()->where('santri_id', $this->santri_id);
    }
}
