<?php

namespace App\Http\Livewire\Pelanggaran;

use App\Models\Pelanggaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{

    use LivewireAlert;
    public $kasus;
    public $bobot;
    public $model_id;

    public function rules()
    {
        return[
            'kasus' => 'required|string|min:5',
            'bobot' => 'required|integer|min:1|max:100',
        ];
    }



    public function messages()
    {
        return[
            'kasus.required' => 'Kasus harus diisi',
            'kasus.string' => 'Kasus harus berupa string',
            'kasus.min' => 'Kasus minimal 5 karakter',
            'bobot.required' => 'Bobot harus diisi',
            'bobot.integer' => 'Bobot harus berupa integer',
            'bobot.min' => 'Bobot minimal 1',
            'bobot.max' => 'Bobot maksimal 100',
        ];
    }


    public function mount()
    {
        $pelanggaran = Pelanggaran::find($this->model_id);
        $this->kasus = $pelanggaran->kasus;
        $this->bobot = $pelanggaran->bobot;

    }

    public function update()
    {
        $this->validate();;
        try {
            $pelanggaran = Pelanggaran::where('id', $this->model_id)->update([
                'kasus' => $this->kasus,
                'bobot' => $this->bobot,
            ]);
            $this->emit('pelanggaranDiperbarui', $pelanggaran);

        } catch (\Exception $e) {
            $this->alert('error', 'Terjadi Memperbarui Pelanggaran');
        }
    }
    public function render()
    {
        return view('livewire.pelanggaran.edit');
    }
}
