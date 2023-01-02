<?php

namespace App\Http\Livewire\Pelanggaran;

use App\Http\Livewire\Modal;
use App\Models\Kesiswaan\Pelanggaran;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Modal
{
    use LivewireAlert;

    public $kasus;
    public $bobot;
    public $model_id;

    protected $listeners = ['edit' => 'handleEdit'];

    public function handleEdit(Pelanggaran $pelanggaran)
    {
        $this->kasus = $pelanggaran->kasus;
        $this->bobot = $pelanggaran->bobot;
        $this->model_id = $pelanggaran->id;
        $this->emit('modalEdit', 'edit-kelas');
    }

    public function rules()
    {
        return [
            'kasus' => 'required|string|min:5',
            'bobot' => 'required|integer|min:1|max:100',
        ];
    }

    public function messages()
    {
        return [
            'kasus.required' => 'Kasus harus diisi',
            'kasus.string' => 'Kasus harus berupa string',
            'kasus.min' => 'Kasus minimal 5 karakter',
            'bobot.required' => 'Bobot harus diisi',
            'bobot.integer' => 'Bobot harus berupa integer',
            'bobot.min' => 'Bobot minimal 1',
            'bobot.max' => 'Bobot maksimal 100',
        ];
    }

    public function simpan()
    {
        $this->validate();;
        try {
            $pelanggaran = Pelanggaran::where('id', $this->model_id)->update([
                'kasus' => $this->kasus,
                'bobot' => $this->bobot,
                'diedit_oleh' => auth()->id()
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
