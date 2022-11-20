<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\KategoriTagihan;
use App\Models\Keuangan\Tagihan;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class Tabel extends DataTableComponent
{
    use LivewireAlert;


    public function configure(): void
    {
        $this->setPrimaryKey('id')->setTableRowUrl(function ($row) {
            Log::debug($row);
            return route('tagihan.detail', $row);
        });
    }

    public array $bulkActions = [
        'hapusMasal' => 'Hapus',
    ];

    public function filters(): array
    {
        return [
            SelectFilter::make('Status')
                ->options([
                    '' => 'Pilih Status',
                    'lunas' => 'Lunas',
                    'jatuh tempo' => 'Jatuh tempo',
                    'sebagian' => 'Sebagian',
                    'belum dibayar' => 'Belum dibayar'
                ])->filter(function (Builder $query, string $status) {
                    return $query->where('tagihans.status', $status);
                }),
            SelectFilter::make('Kategori')->options(
                KategoriTagihan::query()
                    ->orderBy('nama_kategori')
                    ->get()
                    ->keyBy('nama_kategori')
                    ->map(function ($kategori) {
                        return $kategori->nama_kategori;
                    })->toArray(),
            )->filter(function (Builder $builder, string $kategori) {
                return $builder->where('nama_kategori', $kategori);
            })
        ];
    }

    public function hapusMasal()
    {
        $this->confirm('Yakin hapus data ini?', [
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ya, Yakin',
            'denyButtonText' => 'Tidak',
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'hapus',
            'allowOutsideClick' => false,
            'timer' => null,
            'iconHtml' => '<img class="img-fluid" src="/assets/icons/sad.png"/>',
        ]);
    }

    protected $listeners = ['hapus' => 'dihapus'];

    public function dihapus()
    {
        foreach ($this->getSelected() as $terpilih) {
            $tagihan = Tagihan::find($terpilih);
            if ($tagihan) {
                $tagihan->delete();
                $this->alert('success', 'Data terpilih berhasil dihapus');
            } else {
                $this->alert('error', 'Data tidak ditemukan');
                return false;
            }
        }

        $this->clearSelected();
    }


    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable()->deselected(),
            Column::make('kode', 'kode_tagihan')->sortable()->deselected(),
            Column::make('Tgl. Dibuat', 'tgl_dibuat')
                ->sortable()
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y')),
            Column::make('Kode Transaksi')->deselected(),
            Column::make('Nama Siswa', 'santri.nama_lengkap')->searchable(),
            Column::make('Kategori', 'kategori.nama_kategori'),
            Column::make('Status', 'status')->format(function ($id, $model, $row) {
                return view('_partials.boolean-status', [
                    'status' => $model->sisa_tagihan
                ]);
            }),
            Column::make("Jatuh Tempo", "tgl_jatuh_tempo")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d F, Y'))
                ->sortable(),
            Column::make('Jumlah', 'total_tagihan')->format(fn($total) => rupiah($total)),

        ];
    }

    public function builder(): Builder
    {
        return Tagihan::query();
    }
}
