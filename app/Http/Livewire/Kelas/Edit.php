<?php

namespace App\Http\Livewire\Kelas;

use App\Http\Livewire\Modal;
use App\Models\Akademik\Kelas;
use App\Models\Kepegawaian\Guru;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Modal
{

    use LivewireAlert;

    public $kode_kelas;
    public $nama_kelas;
    public $kelas_id;
    public $wali_kelas;
    protected $listeners = ['edit' => 'show'];

    public function rules()
    {
        $kelas_kode = $this->kelas_id;
        return [
            'kode_kelas' => 'required|unique:kelas,kode_kelas,' . $kelas_kode,
            'nama_kelas' => 'required|unique:kelas,nama_kelas,' . $kelas_kode,
            'wali_kelas' => 'required'
        ];
    }

    public function show($id)
    {
        $kelas = Kelas::find($id);
        $this->kode_kelas = $kelas->kode_kelas;
        $this->nama_kelas = $kelas->nama_kelas;
        $this->kelas_id = $kelas->id;
        $this->wali_kelas = $kelas->wali_kelas;
        $this->emit('modalEdit', 'edit-kelas');
    }

    public function update()
    {
        $this->validate();
        try {
            \DB::beginTransaction();
            $kelas = Kelas::find($this->kelas_id);
            $kelas->update([
                'kode_kelas' => $this->kode_kelas,
                'nama_kelas' => $this->nama_kelas,
                'wali_kelas' => $this->wali_kelas,
            ]);

            $nama_file = "{$kelas->kode_kelas}-{$kelas->nama_kelas}";
            $nama_file = \Str::slug($nama_file) . '.png';
            $path = storage_path('app/qrcode/');
            if (!file_exists($path)) {
                File::makeDirectory($path);
            }
            \QrCode::size(1200)->style('round')->margin(3)->format('png')->generate(encrypt($kelas->id), storage_path('app/qrcode/') . $nama_file);
            \DB::commit();
            $this->flash('success', 'Data berhasil dipebarui', [], route('kelas.semua'));
            $this->emit('kelasDitambah', $kelas);
            $this->mount();
        } catch (\Exception $e) {
            \Debugbar::info($e);
            \DB::rollBack();
            report($e);
            $this->alert('error', 'Data gagal diperbarui');
        }
    }

    public function render()
    {
        return view('livewire.kelas.edit', [
            'data_guru' => Guru::orderBy('nama', 'asc')->get()

        ]);
    }
}
