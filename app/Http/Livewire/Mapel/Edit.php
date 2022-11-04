<?php

namespace App\Http\Livewire\Mapel;

use App\Models\Akademik\Mapel;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{

    use LivewireAlert;
    public $nama;
    public $kode;
    public $mapel_id;
    public function mount()
    {
        $kode = Mapel::count();
        $this->kode = 'MPL-' . str_pad($kode + 1, 3, '0', STR_PAD_LEFT);
    }

    protected $listeners = ['edit' => 'show'];

    public function show($id)
    {
        $mapel = Mapel::find($id);
        $this->nama = $mapel->nama;
        $this->kode = $mapel->kode;
        $this->mapel_id = $mapel->id;
        $this->emit('modalEdit', 'edit-mapel');
    }

    public function rules()
    {
        $id = $this->mapel_id;
        return[
            'kode' => 'required|unique:mapels,kode,' . $id,
            'nama' => 'required|unique:mapels,nama'
        ];
    }

    public function simpan()
    {


        $this->validate();
        try {
            $mapel = Mapel::where('id', $this->mapel_id)->update([
                'kode' => $this->kode,
                'nama' =>   $this->nama,
                'dibuat_oleh' => auth()->id(),
                'diubah_oleh' => auth()->id()
            ]);
            $this->emit('mapelDiperbarui', $mapel);
            $this->flash('success', 'Data berhasil diperbarui', [], route('mapel.semua'));
        }catch (\Exception $e){
            \Debugbar::info($e);
            $this->alert('error', 'Data gagal disimpan');
        }
    }
    public function render()
    {
        return view('livewire.mapel.edit');
    }
}
