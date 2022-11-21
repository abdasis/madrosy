<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Tagihan;
use App\Models\Keuangan\Transaksi;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Str;
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
            'total_pembayaran' => (int)$tagihan->total_tagihan - $tagihan->transaksi()->where('status_transaksi', 'berhasil')->sum('total')
        ]);

        if ($tagihan->sisa_tagihan == 'lunas') {
            $this->flash('info', 'Tagihan sudah berhasil dibayarkan', [], route('tagihan.detail', $tagihan->id));
        }
    }

    public function rules()
    {
        return [
            'tanggal_pembayaran' => 'required',
            'total_pembayaran' => 'required',
            'metode_pembayaran' => 'required',
            'keterangan' => 'required',
            'jumlah_uang_diterima' => 'nullable|numeric'
        ];
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

        //pembayaran tidak boleh melebihi dari tagihan
        $total_dibayar = $this->tagihan->transaksi->where('status_transaksi', 'berhasil')->sum('total');
        $total_tagihan = $this->tagihan->total_tagihan - $total_dibayar;
        if ($this->total_pembayaran > $total_tagihan) {
            $this->addError('total_pembayaran', 'Total pembayaran tidak boleh melebihi tagihan');
            return false;
        }

        $kode_kategori = $this->tagihan->kategori->kode;
        $nomor_transaksi = Transaksi::max('id');
        $kode_transaksi = str_pad(now()->format('dmy-') . "{$this->tagihan->santri_id} - {$nomor_transaksi}", 8,0,STR_PAD_LEFT);

        $transaksi = Transaksi::where('kode_referensi', $this->tagihan->kode_transaksi)->first();
        $transaksi->order_id = "{$kode_kategori}-{$kode_transaksi}";


        try {
            Transaksi::create([
                'waktu_transaksi' => now(),
                'status_transaksi' => 'berhasil',
                'toko' => "Tata Usaha Sekolah",
                'kode_status' => 200,
                'order_id' => $transaksi->order_id,
                'transaksi_id' => $kode_transaksi,
                'keterangan_status' => 'Uang berhasil diterima oleh TU',
                'waktu_penyelesaian' => now()->toDateTimeString(),
                'jenis_pembayaran' => $this->metode_pembayaran,
                'total' => $this->total_pembayaran,
                'mata_uang' => 'IDR',
                'tanda_terima' => auth()->user()->id,
                'token' => \Str::uuid(),
                'kode_referensi' => $this->tagihan->kode_transaksi,
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
