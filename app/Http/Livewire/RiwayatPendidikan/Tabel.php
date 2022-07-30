<?php

namespace App\Http\Livewire\RiwayatPendidikan;

use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RiwayatPendidikan;

class Tabel extends DataTableComponent
{
    protected $model = RiwayatPendidikan::class;

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
            Column::make('Guru', 'guru.nama')
                ->sortable()
                ->searchable(),
            Column::make('NIK', 'guru.nik')
                ->sortable()
                ->searchable(),
            Column::make('Nama Sekolah', 'nama_sekolah')
                ->sortable()
                ->searchable(),
            Column::make('Alamat Sekolah', 'alamat_sekolah')
                ->searchable(),
            Column::make('Jurusan', 'jurusan')
                ->searchable(),
            Column::make('Tahun Lulus', 'tahun_lulus')
                ->format(fn($tahun_lulus) => Carbon::parse($tahun_lulus)->format('d F, Y')),
            Column::make('Tahun Masuk', 'tahun_masuk')
                ->format(fn($tahun_masuk) => Carbon::parse($tahun_masuk)->format('d F, Y')),
            Column::make("Dibuat Pada", "created_at")
                ->format(fn($dibuat_pada) => Carbon::parse($dibuat_pada)->format('d F, Y'))
                ->deselected()
                ->sortable(),
            Column::make("Diperbarui", "updated_at")
                ->format(fn($diperbarui) => Carbon::parse($diperbarui)->format('d F, Y'))
                ->sortable()
                ->deselected(),
            Column::make('Aksi', 'guru.id')->format(function ($id, $model, $baris){
                return view('tombol-aksi', [
                    'hapus' => $id,
                    'edit' => route('riwayat-pendidikan.edit', $id),
                    'detail' => route('guru.detail', $id),
                ]);
            })
        ];
    }
}
