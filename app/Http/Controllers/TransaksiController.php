<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function midtransResponse(Request $request)
    {
        $transaksi = Transaksi::where('transaksi_id', $request->order_id)->first();
        $transaksi->update([
            'waktu_transaksi' => $request->transaction_time,
            'status_transaksi' => $request->transaction_status,
            'toko' => $request->store,
            'keterangan_status' => $request->status_message,
            'kode_status' => $request->status_code,
            'tanda_terima' => $request->signature_key,
            'waktu_penyelesaian' => $request->settlement_time,
            'jenis_pembayaran' => $request->payment_type,
            'kode_pembayaran' => $request->payment_code,
            'order_id' => $request->order_id,
            'merchant_id' => $request->merchant_id,
            'total' => $request->gross_amount,
            'mata_uang' => 'IDR',
            'kode_persetujuan' => $request->approval_code ?? 'belum diketahui',
            'penipuan_status' => $request->fraud_status ?? 'belum diketahui',
        ]);
        
    }

    public function pembayaranSelesai(Request $request)
    {
        $transaksi = Transaksi::where('transaksi_id', $request->order_id)->first();
        return view('midtrans.pembayaran-selesai', compact('transaksi'));
    }
}
