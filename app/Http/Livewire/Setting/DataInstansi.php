<?php

namespace App\Http\Livewire\Setting;

use App\Models\Commons\Kabupaten;
use App\Models\Commons\Provinsi;
use App\Models\Kesiswaan\Presensi;
use Livewire\Component;

class DataInstansi extends Component
{
    public $provinsi;
    public function render()
    {
        return view('livewire.setting.data-instansi',[
            'data_provinsi' => Provinsi::orderBy('name', 'asc')->get(),
            'data_kabupaten' => Kabupaten::where('province_code', $this->provinsi)->get()
        ]);
    }
}
