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
        if ($request->payment_type == 'cstore'){
            $jenis_pembayaran = \Str::title($request->store);
        }elseif($request->payment_type == 'bank_transfer'){
            $jenis_pembayaran = \Str::upper($request->va_numbers['bank']);
        }else{
            $jenis_pembayaran = \Str::title($transaksi->jenis_pembayaran);
        }
        $transaksi->update([
            'waktu_transaksi' => $request->transaction_time,
            'status_transaksi' => $request->transaction_status,
            'toko' => $request->store,
            'keterangan_status' => $request->status_message,
            'kode_status' => $request->status_code,
            'tanda_terima' => $request->signature_key,
            'waktu_penyelesaian' => now()->toDateTimeString(),
            'jenis_pembayaran' => $jenis_pembayaran,
            'kode_pembayaran' => $request->payment_code,
            'order_id' => $request->order_id,
            'merchant_id' => $request->merchant_id,
            'total' => $request->gross_amount,
            'mata_uang' => 'IDR',
            'kode_persetujuan' => $request->approval_code ?? 'belum diketahui',
            'penipuan_status' => $request->fraud_status ?? 'belum diketahui',
        ]);

        if ($transaksi){
            return response()->json($transaksi, '200' , [], JSON_PRETTY_PRINT);
        }else{
            return response()->json('Transaksi tidak ditemukan', '404' , [], JSON_PRETTY_PRINT);
        }

    }

    public function pembayaranSelesai(Request $request)
    {
        $transaksi = Transaksi::where('transaksi_id', $request->order_id)->first();
        return view('midtrans.pembayaran-selesai', compact('transaksi'));
    }

    public function pembayaranPending(Request $request)
    {
        $transaksi = Transaksi::where('transaksi_id', $request->order_id)->first();
        return view('midtrans.pembayaran-pending', compact('transaksi'));
    }

    public function kesalahanPembayaran(Request $request)
    {
        $transaksi = Transaksi::where('transaksi_id', $request->order_id)->first();
        return view('midtrans.kesalahan-pembayaran', compact('transaksi'));
    }
}
