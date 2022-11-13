<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Profile extends Component
{
    public $user = [];

    public function mount()
    {
        $user = auth()->user();

        if ($user->getRoleNames()->first() == 'Administrator') {
            $guru = auth()->user()->guru;

            $this->user = [
                'nama_lengkap' => $guru->nama,
                'avatar' => $guru->avatar != null ? $guru->avatar->nama_file : 'https://ui-avatars.com/api/?background=random&name=' . $guru->nama,
                'tanggal_lahir' => $guru->tanggal_lahir,
                'tempat_lahir' => $guru->tempat_lahir,
                'telepon' => $guru->no_hp,
                'email' => $guru->email,
                'nik' => $guru->nik,
                'tempat_tinggal' => $guru->tempat_tinggal,
                'agama' => $guru->agama,
                'jenis_kelamin' => $guru->jenis_kelamin,
                'pendidikan_terakhir' => $guru->pendidikan_terakhir,
            ];

        } elseif ($user->getRoleNames()->first() == 'Siswa') {
            $this->user = $user->santri;
        }
    }

    public function render()
    {
        return view('livewire.auth.profile');
    }
}
