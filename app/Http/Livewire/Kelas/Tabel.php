<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Akademik\Kelas;
use App\Traits\KonfirmasiHapus;
use Carbon\Carbon;
use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
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

            if ($kelas->jadwal()->count() > 0) {
                $this->alert('warning', 'Terdapat Jadwal di Kelas', [
                    'text' => 'Anda tidak bisa menghapus kelas yang memiliki jadwal'
                ]);

                return false;
            }
            $kelas->qrcodes()->delete();
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

    public function regenerate($id)
    {
        try {
            DB::beginTransaction();
            $kelas = Kelas::find($id);

            $kode = $kelas->qrcodes()->create([
                'dibuat_oleh' => auth()->user()->id,
                'tanggal_dibuat' => now(),
                'kode' => \Str::uuid()
            ]);

            $nama_file = "{$kelas->nama_kelas}-{$kode->kode}";
            $nama_file = \Str::slug($nama_file) . '.png';
            $path = storage_path('app/qrcode/');
            if (!file_exists($path)) {
                File::makeDirectory($path);
            }

            \QrCode::size(1200)->style('round')->margin(3)->format('png')->generate($kode->kode, storage_path('app/qrcode/') . $nama_file);
            DB::commit();
            $this->alert('success', 'Berhasil', [
                'text' => 'Kode QR berhasil dibuat ulang'
            ]);

        } catch (\Exception $exception) {
            DB::rollBack();
            $this->alert('warning', 'Kesalahan', [
                'text' => 'Kesalahaan saat regenerate kode QR'
            ]);
        }
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
                if ($kelas->qrcodes->count() > 0) {
                    $nama_file = "{$kelas->nama_kelas}-{$kelas->qrcodes()->latest()->first()->kode}";
                    $nama_file = \Str::slug($nama_file) . '.png';
                    if (file_exists(public_path('qrcode/' . $nama_file))) {
                        return view('livewire.kelas.modal', [
                            'file' => $nama_file,
                            'id' => $qr
                        ]);
                    }
                } else {
                    return '';
                }

            })->html()->unclickable(),
            Column::make('Total Siswa', 'id')->format(function ($id, $model) {
                return $model->santri_count;
            }),
            Column::make("Dibuat Pada", "created_at")
                ->sortable()->format(fn($tanggal) => Carbon::parse($tanggal)->format('d-m-Y')),
            Column::make("Diedit Pada", "updated_at")
                ->sortable()->format(fn($tanggal) => Carbon::parse($tanggal)->format('d-m-Y')),
            Column::make('Opsi', 'id')->format(function ($id) {
                return view('tombol-aksi', [
                    'id' => $id,
                    'regenerate_token' => $id,
                    'editWithModal' => 'kelas.edit',
                    'hapus' => $id
                ]);
            })->excludeFromColumnSelect()->unclickable()
        ];
    }

    public function builder(): Builder
    {
        return Kelas::query()->withCount('santri');
    }
}
