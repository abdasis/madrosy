<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Akademik\Jadwal;
use App\Traits\KonfirmasiHapus;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $model = Jadwal::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    protected $listeners = ['hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id) {
            $jadwal = Jadwal::find($this->model_id);
            $jadwal->delete();

            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Kesalahaan saat hapus data');
        }
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Mata Pelajaran', 'mapel.nama')
                ->sortable()->searchable(),
            Column::make('Kelas', 'kelas.nama_kelas')
                ->sortable()->searchable(),
            Column::make('Guru', 'guru.nama')
                ->sortable()->searchable(),
            Column::make('Hari', 'hari')->sortable(),
            Column::make('Mulai', 'jam_mulai'),
            Column::make('Selesai', 'jam_selesai'),
            Column::make("Dibuat Pada", "created_at")
                ->sortable()->deselected(),
            Column::make("Terakhir Diubah", "updated_at")
                ->sortable()->deselected(),
            Column::make('Opsi', 'id')->format(function ($id){
                return view('tombol-aksi', [
                    'id' => $id,
                    'edit' => route('jadwal.edit', $id),
                    'hapus' => $id
                ]);
            })->excludeFromColumnSelect(),
        ];
    }
}
