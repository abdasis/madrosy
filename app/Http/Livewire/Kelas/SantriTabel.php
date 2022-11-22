<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Akademik\Kelas;
use App\Models\Kesiswaan\Santri;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class SantriTabel extends DataTableComponent
{
    protected $model = Santri::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }


    public function filters(): array
    {


        $kelas = Kelas::query()->orderBy('nama_kelas')
            ->get()
            ->keyBy('id')
            ->map(fn($kelas) => $kelas->nama_kelas)->toArray();

        array_unshift($kelas,'None');

        return [
            SelectFilter::make('Kelas')
                ->options(
                    $kelas
                )->filter(function (Builder $query, string $kelas) {
                    if ($kelas  != 0){
                        $query->whereHas('kelas', function ($query) use ($kelas) {
                            $query->where('id', $kelas);
                        });
                    }else{
                        $query->whereDoesntHave('kelas');
                    }
                })
        ];
    }

    public array $bulkActions = [
        'exportSelected' => 'Pindah Kelas',
    ];

    public function exportSelected()
    {
        if ($this->getSelected()) {
            $santri = Santri::whereIn('id', $this->getSelected())->get();
            //membuat session data santri yang dipilih
            \Session::put('data_santri', $santri);
            //2. Redirect ke halaman simpan pindah kelas
            $this->redirectRoute('kelas.konfirmasi');
        }
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->deselected(),
            Column::make("Nama", "nama_lengkap")
                ->searchable()
                ->sortable(),
            Column::make("NISN", "nisn")
                ->sortable(),
            Column::make("Kelas Saat Ini", "id")
                ->format(function ($value, $model) {
                    return $model->kelas->first()->nama_kelas ?? 'none';
                })
                ->html()
                ->sortable(),
        ];
    }
}
