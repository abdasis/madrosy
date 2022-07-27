<?php

namespace App\Http\Livewire\Guru;

use App\Traits\KonfirmasiHapus;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Guru;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;
    protected $model = Guru::class;

    protected $listeners = ['hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id){
            $guru = Guru::find($this->model_id)->delete();

            if ($guru){
                $this->alert('success', 'Data berhasil dihapus');
            }else{
                $this->alert('error', 'Data gagal dihapus');
            }
        }
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setTableRowUrl(function ($model) {
            return route('guru.detail', $model->id);
        });

        $this->setDefaultReorderSort('order', 'desc');

    }

    public function columns(): array
    {
        return [
            Column::make('id')->sortable(),
            Column::make("NIK", "nik")
                ->sortable(),
            Column::make('Nama Lengkap', 'nama')
                ->sortable()
                ->searchable(),
            Column::make('Jabatan', 'jabatan')
                ->sortable()
                ->searchable(),
            Column::make('Status', 'status_guru')
                ->sortable()
                ->searchable(),
            Column::make('No. HP', 'no_hp')
                ->sortable()
                ->searchable(),
            BooleanColumn::make('Active', 'status'),
            Column::make('Opsi', 'id')->format(function ($id, $model, $baris){
                return view('tombol-aksi', [
                    'hapus' => $id,
                    'edit' => route('guru.edit', $model)
                ]);
            })->unclickable()->excludeFromColumnSelect(),
        ];
    }
}
