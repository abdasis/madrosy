<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Akademik\Kelas;
use App\Traits\KonfirmasiHapus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;


    protected $listeners = ['kelasDitambah', 'hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id) {
            $kelas = Kelas::find($this->model_id);
            $kelas->delete();
            $this->alert('success', 'Data berhasil dihapus');
        } else {
            $this->alert('error', 'Data tidak ditemukan');
        }
    }

    public function kelasDitambah($kelas)
    {
        return $kelas;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('detail.kelas', $row);
            })
            ->setDefaultSort('kode_kelas', 'asc');
    }

    public function edit($id)
    {
        $this->emit('editModal', [
            'title' => 'Edit Data',
            'body' => 'kelas.edit',
            'model' => $id,
            'status' => 'edit',
        ]);
    }

    public function download($foto)
    {
        return response()->download(storage_path("app/qrcode/{$foto}"));
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Kode Kelas')
                ->searchable()
                ->sortable(),
            Column::make('Nama Kelas')
                ->searchable()
                ->sortable(),
            Column::make('QrCode', 'id')->format(function ($qr, $kelas, $row) {
                $nama_file = "{$kelas->kode_kelas}-{$kelas->nama_kelas}";
                $nama_file = \Str::slug($nama_file) . '.png';
                return view('livewire.kelas.modal', [
                    'file' => $nama_file,
                    'id' => $qr
                ]);
            })->html()->unclickable(),
            Column::make('Total Siswa', 'id')->format(function ($id, $model) {
                return $model->santri_count;
            }),
            Column::make("Dibuat Pada", "created_at")
                ->sortable(),
            Column::make("Diedit Pada", "updated_at")
                ->sortable(),
            Column::make('Opsi', 'id')->format(function ($id) {
                return view('tombol-aksi', [
                    'id' => $id,
                    'editWithModal' => 'kelas.edit',
                    'hapus' => $id
                ]);
            })->excludeFromColumnSelect()
        ];
    }

    public function builder(): Builder
    {
        return Kelas::query()->withCount('santri');
    }
}
