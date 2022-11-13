<?php

namespace App\Http\Livewire\KategoriTagihan;

use App\Models\Keuangan\KategoriTagihan;
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
            $kategori = KategoriTagihan::find($this->model_id);
            $kategori->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('error', 'Data gagal dihapus');
        }
    }
    protected $model = KategoriTagihan::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", 'id')
                ->deselected()
                ->sortable(),
            Column::make('Tahun Ajaran', 'tapel.tahun_awal')
                ->sortable(),
            Column::make('Nama Kategori','nama_kategori')
                ->format(function ($nama_kategori, $model){
                    $link = route('tagihan.atur-perkelas', $model->id);
                    return "<a href='{$link}' class='fw-bold text-success'>{$nama_kategori}</a>";
                })
                ->html()
                ->sortable()
                ->searchable(),
            Column::make('Jenis Tagihan', 'jenis_tagihan')
                ->sortable(),
            BooleanColumn::make('Cicilan', 'cicilan')
                ->yesNo()
                ->sortable(),
            BooleanColumn::make('Status', 'status')
                ->setCallback(function ($value) {
                    return $value == 'aktif' ? true : false;
                })
                ->sortable(),
            Column::make("Dibuat Pada", "created_at")
                ->format(fn($tanggal) => $tanggal->format("d F, Y H:i:s"))
                ->sortable(),
            Column::make("Diubah Pada", "updated_at")
                ->format(fn($tanggal) => $tanggal->format("d F, Y H:i:s"))
                ->sortable(),
            Column::make('Opsi', 'id')->format(function ($id){
                return view('tombol-aksi',[
                    'edit' =>  route('kategori-tagihan.edit', $id),
                    'hapus' => $id,
                ]);
            })
        ];
    }
}
