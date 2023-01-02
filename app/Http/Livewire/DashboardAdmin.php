<?php

namespace App\Http\Livewire;

use App\Models\Akademik\Kelas;
use App\Models\Kepegawaian\Guru;
use App\Models\Kesiswaan\Santri;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public function render()
    {
        return view('livewire.dashboard-admin',[
            'data_guru' => Guru::orderBy('nama')->get(),
            'data_siswa' => Santri::orderBy('nama_lengkap')->get(),
            'data_kelas' => Kelas::orderBy('nama_kelas')->get(),
        ]);
    }
}
