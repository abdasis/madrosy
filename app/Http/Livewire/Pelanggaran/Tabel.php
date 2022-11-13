<?php

namespace App\Http\Livewire\Pelanggaran;

use App\Models\Kesiswaan\Pelanggaran;
use App\Traits\KonfirmasiHapus;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $model = Pelanggaran::class;

    protected $listeners = [
        'tambahPelanggaran' => 'handleTambahPelanggaran',
        'pelanggaranDiperbarui' => 'handlePelanggaranDiperbarui',
        'hapus' => 'dihapus',
    ];

    public function dihapus()
    {
        if ($this->model_id) {
            $pelanggaran = Pelanggaran::find($this->model_id);
            if ($pelanggaran->has('konseling')) {
                $this->alert('error', 'Hapus Terlebih Dahulu Data Konseling');
                return false;
            }
            $pelanggaran->delete();
            $this->alert('success', 'Data Berhasil Dihapus');
        } else {
            $this->alert('error', 'Data tidak ditemukan');
        }

    }

    public function handleTambahPelanggaran($pelanggaran)
    {
        $this->alert('success', 'Pelanggaran berhasil ditambahkan');
    }

    public function handlePelanggaranDiperbarui($pelanggaran)
    {
        $this->alert('success', 'Pelanggaran berhasil diperbarui');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function edit($id)
    {
        $pelanggaran = Pelanggaran::find($id);
        $this->emit('editPelanggaran', $pelanggaran);
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->deselected()
                ->sortable(),
            Column::make('Pelanggaran', 'kasus')
                ->searchable()
                ->sortable(),
            Column::make('Bobot', 'bobot')
                ->searchable()
                ->sortable(),
            Column::make("Dibuat Pada", "created_at")
                ->deselected()
                ->sortable(),
            Column::make("Diupdate Pada", "updated_at")
                ->deselected()
                ->sortable(),
            Column::make('Opsi', 'id')->format(function ($id) {
                return view('tombol-aksi', [
                    'hapus' => $id,
                    'editWithModal' => 'pelanggaran.edit',
                    'id' => $id,
                ]);
            })->excludeFromColumnSelect()
        ];
    }

}
