<?php

namespace App\Http\Livewire\Guru;

use App\Models\Kepegawaian\RiwayatPendidikan;
use App\Traits\KonfirmasiHapus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class RiwayatPendidikanTabel extends DataTableComponent
{
    use KonfirmasiHapus;

    protected $listeners = ['hapus' => 'dihapus'];

    public function dihapus()
    {
        if ($this->model_id){
            $pendidikan = RiwayatPendidikan::find($this->model_id);
            $pendidikan->delete();
            $this->alert('success', 'Data berhasil dihapus' );
        }else{
            $this->alert('error', 'Data gagal dihapus' );
        }
    }

    public function mount($id)
    {
        $this->guru_id = $id;
    }

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
            Column::make('Jenjang', 'jenjang_pendidikan')
                ->sortable(),
            Column::make("Nama Sekolah", "nama_sekolah")
                ->searchable()
                ->sortable(),
            Column::make('Jurusan', 'jurusan')
                ->searchable()
                ->sortable(),
            Column::make('Alamat Sekolah')->searchable()->sortable(),
            Column::make('Tahun Lulus', 'tahun_lulus')
                ->format(fn($tahun_lulus) => Carbon::parse($tahun_lulus)->format('d F, Y')),
            Column::make('Tahun Masuk', 'tahun_masuk')
                ->format(fn($tahun_masuk) => Carbon::parse($tahun_masuk)->format('d F, Y')),

        ];
    }

    public function builder():Builder
    {
        return RiwayatPendidikan::query()->where('guru_id', $this->guru_id);
    }
}
