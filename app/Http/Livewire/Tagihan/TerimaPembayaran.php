<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Tagihan;
use App\Models\Keuangan\Transaksi;
use Barryvdh\Debugbar\Facades\Debugbar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TerimaPembayaran extends Component
{

    use LivewireAlert;

    public $tagihan;
    public $tanggal_pembayaran;
    public $keterangan;
    public $total_pembayaran;
    public $metode_pembayaran;
    public $jumlah_uang_diterima;
    public $total_kembali;

    public function mount(Tagihan $tagihan)
    {
        $this->tagihan = $tagihan;
        $this->fill([
            'tanggal_pembayaran' => now()->format('Y-m-d'),
            'total_pembayaran' => (int)$tagihan->total_tagihan - $tagihan->transaksi()->sum('total')
        ]);
    }

    public function rules()
    {
        return [
            'tanggal_pembayaran' => 'required',
            'total_pembayaran' => 'required|numeric',
            'metode_pembayaran' => 'required',
            'keterangan' => 'required',
            'jumlah_uang_diterima' => 'nullable|numeric'
        ];
    }

    public function updatedJumlahUangDiterima()
    {
        $this->total_kembali = rupiah((int)$this->jumlah_uang_diterima - $this->total_pembayaran);
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function simpan()
    {
        $this->validate();

        //cek jenis tagihan
        if ($this->tagihan->kategori->cicilan == 0) {
            if ($this->total_pembayaran < $this->tagihan->total_tagihan) {
                $this->addError('total_pembayaran', 'Total pembayaran harus lebih dari jumlah tagihan');
                return false;
            }
        }

        try {
            Transaksi::create([
                'waktu_transaksi' => now(),
                'status_transaksi' => 'berhasil',
                'toko' => "Tata Usaha Sekolah",
                'kode_status' => 200,
                'keterangan_status' => 'Uang berhasil diterima oleh TU',
                'waktu_penyelesaian' => now()->toDateTimeString(),
                'jenis_pembayaran' => $this->metode_pembayaran,
                'transaksi_id' => \Str::uuid(),
                'order_id' => $this->tagihan->kode_tagihan,
                'total' => $this->total_pembayaran,
                'mata_uang' => 'IDR',
                'tanda_terima' => auth()->user()->id,
                'token' => \Str::uuid(),
            ]);

            $this->alert('success', 'Pembayaran tagihan berhasil disimpan');
        } catch (\Exception $exception) {
            report($exception);
            $this->alert('error', 'Server error ketika menyimpan data');
        }
    }

    public function render()
    {
        return view('livewire.tagihan.terima-pembayaran');
    }
}
