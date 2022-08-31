<?php

namespace App\Http\Livewire\Tagihan;

use App\Billing\PaymentGateway;
use App\Models\KategoriTagihan;
use App\Models\Kelas;
use App\Models\Tagihan;
use App\Models\TahunAjaran;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AturPerkelas extends Component
{
    use LivewireAlert;

    public $tahun_ajaran;
    public $kelas;
    public $jumlah;
    public $kategori_id;
    public $tgl_tagihan;
    public $tgl_jatuh_tempo;
    public $notes;
    public $data_santri = [];

    public function rules()
    {
        return[
            'kelas' => 'required',
            'tgl_tagihan' => 'required',
            'tgl_jatuh_tempo' => 'required',
            'jumlah' => 'required|integer',
            'kategori_id' => 'required',
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function updatedKelas()
    {
        //1. Ambil data kelas
        $kelas = Kelas::find($this->kelas);

        //2. ambil data siswa pada kelas;
        $this->data_santri = $kelas->santri;
    }

    public function simpan()
    {
        $this->validate();

        //1. Ambil data kelas
        $kelas = Kelas::find($this->kelas);

        //2. ambil data siswa pada kelas;
        $data_siswa = $kelas->santri;

        //3. menyimpan data tagihan siswa yang ada di kelas
        try
        {
            \DB::beginTransaction();
            if ($data_siswa){
                foreach ($data_siswa as $key => $siswa){
                    $tagihan = Tagihan::create([
                        'santri_id' => $siswa->id,
                        'kategori_tagihan_id' =>$this->kategori_id,
                        'kode_tagihan' => \Str::uuid(),
                        'tgl_dibuat' => $this->tgl_tagihan,
                        'tgl_jatuh_tempo' => $this->tgl_jatuh_tempo,
                        'status' => 'belum dibayar',
                        'total_tagihan' => $this->jumlah,
                        'keterangan' => $this->notes,
                        'dibuat_oleh' => auth()->id()
                    ]);

                    $billing = new PaymentGateway();

                    $pembayaran = $billing->charge($tagihan);

                    dd($pembayaran);


                }
            }

            $this->alert('success', 'Tagihan Berhasil Di buatkan');

            \DB::commit();
        }catch (\Exception $exception){
            dd($exception);
            \DB::rollBack();
            $this->alert('error', 'Terjadi kesalahan saat menyimpan data');
        }


    }

    public function render()
    {
        return view('livewire.tagihan.atur-perkelas',[
            'data_kelas' =>     Kelas::orderBy('nama_kelas', 'asc')->get(),
            'data_tahun_ajaran' => TahunAjaran::orderBy('tahun_awal', 'desc')->get(),
            'data_kategori_tagihan' => KategoriTagihan::orderBy('nama_kategori', 'asc')->get(),
        ]);
    }
}
