<?php

namespace App\Http\Livewire\Rekening;

use App\Traits\KonfirmasiHapus;
use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Rekening;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $model = Rekening::class;
    protected $listeners = ['hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id){
            $rekening = Rekening::find($this->model_id);
            $rekening->delete();
            $this->alert('success', 'Data Berhasil Dihapus');
        }else{
            $this->alert('error', 'Data tidak ditemukan');
        }
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function filters(): array
    {
        return[
            'status' => SelectFilter::make('Status')->options([
                '' => 'Semua',
                'aktif' => 'Aktif',
                'non-aktif' => 'Non-Aktif',
            ])->filter(function ($query, $value) {
                if ($value) {
                    $query->where('status', $value);
                }
            }),

            'jenis_tabungan' => SelectFilter::make('Jenis Tabungan')->options([
                '' => 'Semua',
                'harian' => 'Harian',
                'tabungan' => 'Tabungan',
            ])->filter(function ($query, $value) {
                if ($value) {
                    $query->where('jenis_rekening', $value);
                }
            }),
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make('Nama Lengkap', 'santri.nama_lengkap')
                ->searchable(),
            Column::make('Nomor Rekenig', 'nomor_rekening')
                ->searchable(),
            Column::make('Jenis Rekening', 'jenis_rekening')
                ->sortable()->format(fn($jenis_rekening) => \Str::title($jenis_rekening)),
            Column::make('Limit Harian', 'limit_harian')
                ->sortable()->format(fn($limit_harian) => rupiah($limit_harian)),
            Column::make('Dibuat Oleh', 'pembuat.name')
                ->sortable(),
            Column::make("Tanggal Daftar", "created_at")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y H:i'))
                ->sortable(),
            Column::make("Pembaruan", "updated_at")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y H:i'))
                ->sortable()
                ->deselected(),
            Column::make('Opsi', 'id')->format(function ($id){
                return view('tombol-aksi', [
                    'id' => $id,
                    'edit' => route('rekening.edit', $id),
                    'hapus' => $id
                ]);
            })->excludeFromColumnSelect(),
        ];
    }
}
