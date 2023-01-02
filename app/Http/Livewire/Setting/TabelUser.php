<?php

namespace App\Http\Livewire\Setting;

use App\Models\Commons\User;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AbsensiGuru;

class TabelUser extends DataTableComponent
{
    use LivewireAlert;

    public $user_id;
    protected $model = User::class;
    protected $listeners = ['reset_password' => 'handleReset'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function reset_password($user_id)
    {
        $this->confirm('Yakin reset password user ini?', [
            'text' => 'Password akan di reset ke "rahasia123"',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ya, Yakin',
            'denyButtonText' => 'Tidak',
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'reset_password',
            'allowOutsideClick' => false,
            'timer' => null,
            'iconHtml' => '<img class="img-fluid" src="/assets/icons/sad.png"/>',
        ]);

        $this->user_id = $user_id;
    }

    public function handleReset()
    {
        $user = User::find($this->user_id);
        $user->update([
            'password' => bcrypt('rahasia123'),
        ]);

        $this->alert('success', 'Password Berhasil di Reset');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->deselected()
                ->sortable(),
            Column::make('Nama Pengguna', 'name')
                ->searchable(),
            Column::make('Email', 'email')->searchable(),
            Column::make('Role', 'id')->format(function ($id, $model, $row) {
                return collect($model->getRoleNames())->first();
            }),
            Column::make("Dibuat Pada", "created_at")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d-m-Y H:i'))
                ->sortable(),

            Column::make("Update Pada", "updated_at")
                ->format(fn($tanggal) => Carbon::parse($tanggal)->format('d-m-Y H:i'))
                ->sortable(),
            Column::make('Action', 'id')->format(function ($id) {
                return view('tombol-aksi', [
                    'reset_password' => $id
                ]);
            })
        ];
    }
}
