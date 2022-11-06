<?php

namespace App\Http\Livewire\Guru;

use App\Models\Akademik\Kelas;
use App\Models\Kepegawaian\Guru;
use App\Traits\KonfirmasiHapus;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $model = Guru::class;

    protected $listeners = ['hapus' => 'dihapus'];

    public function filters(): array
    {
        return [
            SelectFilter::make('Jenis Kelamin')
                ->options([
                    '' => 'Semua',
                    'Perempuan' => 'Perempuan',
                    'Laki-Laki' => 'Laki-Laki',
                ])->filter(function (Builder $query, $value) {
                    if ($value) {
                        $query->where('jenis_kelamin', $value);
                    }
                }),

            SelectFilter::make('Status')
                ->options([
                    '' => 'Pilih Status',
                    'Tetap' => 'Tetap',
                    'Kontrak' => 'Kontrak'
                ])->filter(function (Builder $query, string $status) {
                    return $query->where('status_guru', $status);
                }),
            SelectFilter::make('Jabatan')
                ->options([
                    '' => "Pilih Jabatan",
                    'Kepala Sekolah' => 'Kepala Sekolah',
                    'Guru' => 'Guru',
                    'Wali Kelas' => 'Wali Kelas',
                ])->filter(function (Builder $query, string $status) {
                    return $query->where('jabatan', $status);
                })
        ];
    }

    public function dihapus()
    {
        if ($this->model_id) {
            $guru = Guru::find($this->model_id);

            if (!empty($guru->jadwal)) {
                $this->alert('warning', 'Guru Memiliki Jadwal', [
                    'text' => 'Anda tidak bisa menghapus guru yang sudah memiliki jadwal'
                ]);
                return false;
            }


            $guru->delete();
            $this->alert('success', 'Data berhasil dihapus');

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
                ->searchable()
                ->sortable(),
            Column::make('Nama Lengkap', 'nama')
                ->sortable()
                ->searchable(fn(Builder $query, $keyword) => $query->orWhere('nama', 'like', "%{$keyword}%")),
            Column::make('Jabatan', 'jabatan')
                ->sortable(),
            Column::make('Status', 'status_guru')
                ->sortable(),
            Column::make('No. HP', 'no_hp')
                ->sortable(),
            BooleanColumn::make('Aktif', 'status'),
            Column::make('Opsi', 'id')->format(function ($id, $model, $baris) {
                return view('tombol-aksi', [
                    'hapus' => $id,
                    'edit' => route('guru.edit', $model)
                ]);
            })->unclickable()->excludeFromColumnSelect(),
        ];
    }
}
