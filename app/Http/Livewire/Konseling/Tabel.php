<?php

namespace App\Http\Livewire\Konseling;

use App\Models\Kesiswaan\Konseling;
use App\Traits\KonfirmasiHapus;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;

class Tabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $model = Konseling::class;

    protected $listeners = ['hapus' => 'dihapus'];

    public function filters():array
    {
        return [
            'tanggal' => DateFilter::make('Tanggal')
        ];
    }

    public function dihapus()
    {
        if ($this->model_id){
            $konseling = Konseling::find($this->model_id);
            $konseling->delete();
            $this->alert('success', 'Data Berhasil Dihapus');
        }else{
            $this->alert('error', 'Data tidak ditemukan');
        }
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }



    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->deselected()
                ->sortable(),
            Column::make('NISN', 'santri.nisn')
                ->sortable()
                ->searchable(),
            Column::make('Nama', 'santri.nama_lengkap'),
            Column::make('Bukti', 'foto_bukti')->format(function ($foto) {
                $foto = asset($foto);
                return "<a href='$foto' target='_blank'><img src='$foto' class='avatar-xxs rounded-3' /></a>";
            })->html(),
            Column::make('Tanggal', 'tanggal')
                ->sortable()
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y'))
                ->searchable(),
            Column::make('Pelanggaran', 'pelanggaran.kasus')
                ->sortable()
                ->searchable(),
            Column::make('Point', 'pelanggaran.bobot')
                ->sortable()
                ->searchable(),
            Column::make('Keterangan', 'keterangan'),
            Column::make('Dibuat Oleh', 'user.name')
                ->sortable()
                ->searchable(),
            Column::make("Dibuat Pada", "created_at")
                ->sortable()
                ->deselected(),
            Column::make("Diubah Pada", "updated_at")
                ->sortable()
                ->deselected(),
            Column::make('Opsi', 'id')->format(function ($id){
                return view('tombol-aksi', [
                    'id' => $id,
                    'edit' => route('konseling.edit', $id),
                    'hapus' => $id,
                ]);
            })->excludeFromColumnSelect()
        ];
    }
}
