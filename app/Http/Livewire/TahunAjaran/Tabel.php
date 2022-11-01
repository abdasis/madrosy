<?php

namespace App\Http\Livewire\TahunAjaran;

use App\Models\Akademik\TahunAjaran;
use App\Traits\KonfirmasiHapus;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $listeners = ['hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id){
            $tahun_ajaran = TahunAjaran::find($this->model_id);
            $tahun_ajaran->delete();
            $this->alert('success', 'Tahun ajaran berhasil dihapus');
        }else{
            $this->alert('error', 'Tahun ajaran gagal dihapus');
        }
    }

    protected $model = TahunAjaran::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make('Tahun Awal', 'tahun_awal')
                ->searchable()
                ->sortable(),
            Column::make('Tahun Akhir', 'tahun_akhir')
                ->searchable()
                ->sortable(),
            BooleanColumn::make('status', 'status')
                ->setCallback(function (string $row, $value) {
                    return $value->status == 'aktif' ? true : false;
                }),
            Column::make("Dibuat Pada", "created_at")
                ->format(fn($tanggal) => $tanggal->format('d F, Y H:i'))
                ->sortable(),
            Column::make("Diubah Pada", "updated_at")
                ->format(fn($tanggal) => $tanggal->format('d F, Y H:i'))
                ->sortable(),
            Column::make('Aksi', 'id')
                ->format(function ($id){
                    return view('tombol-aksi', [
                        'id' => $id,
                        'edit' => route('tahun-ajaran.edit', $id),
                        'hapus' => $id
                    ]);
                }),
        ];
    }
}
