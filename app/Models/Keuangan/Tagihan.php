<?php

namespace App\Models\Keuangan;

use App\Models\Commons\User;
use App\Models\Kesiswaan\Santri;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(KategoriTagihan::class,'kategori_tagihan_id', 'id');
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'kode_referensi', 'kode_transaksi');
    }

    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh', 'id');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'tagihan_id', 'id');
    }

    public function sisaTagihan(): Attribute
    {
        return Attribute::make(
            get: function ($tagihan){
                $total_pembayaran = $this->transaksi()->where('status_transaksi', 'berhasil')->sum('total');
                $total_tagihan = $this->total_tagihan;
                $tgl_jatuh_tempo = Carbon::parse($this->tgl_jatuh_tempo);
                $tgl_hari_ini = Carbon::now();
                if ($total_pembayaran >= $total_tagihan) {
                    $status = 'lunas';
                } elseif ($total_pembayaran > 0 && $total_pembayaran < $total_tagihan) {
                    $status = 'sebagian';
                } elseif ($total_pembayaran > 0 || $total_pembayaran < $total_tagihan && $tgl_hari_ini->gte($tgl_jatuh_tempo)) {
                    $status = 'jatuh tempo';
                } elseif ($total_pembayaran < 1) {
                    $status = 'belum dibayar';
                } else {
                    $status = 'pending';
                }
                return $status;
            }
        );
    }
}
