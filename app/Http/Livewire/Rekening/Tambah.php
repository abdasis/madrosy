<?php

namespace App\Http\Livewire\Rekening;

use App\Models\Rekening;
use App\Models\Santri;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $santri_id;
    public $nomor_rekening;
    public $passcode;
    public $passcode_confirmation;
    public $jenis_rekening;
    public $limit_harian;

    public function mount()
    {
        $this->fill([
            'nomor_rekening' => rand(1000000000, 9999999999),
        ]);
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function rules()
    {
        return[
            'santri_id' => 'required',
            'nomor_rekening' => 'required|unique:rekenings,nomor_rekening',
            'passcode' => 'required|min:6|max:6',
            'passcode_confirmation' => 'required|min:6|max:6|same:passcode',
            'jenis_rekening' => 'required',
            'limit_harian' => 'numeric|required|min:10000',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $rekening = Rekening::create([
                'santri_id' => $this->santri_id,
                'nomor_rekening' => $this->nomor_rekening,
                'passcode' => bcrypt($this->passcode),
                'jenis_rekening' => $this->jenis_rekening,
                'limit_harian' => $this->jenis_rekening == 'harian' ? $this->limit_harian : null,
                'status' => 'aktif',
            ]);
            $this->alert('success', 'Rekening berhasil ditambahkan');
            $this->reset();
            $this->mount();

        }catch (\Exception $e) {
            return $this->alert('error', 'Gagal menambahkan rekening');
        }
    }
    public function render()
    {
        return view('livewire.rekening.tambah',[
            'semua_santri' => Santri::orderBy('nama_lengkap', 'asc')->get(['id', 'nama_lengkap']),
        ]);
    }
}
