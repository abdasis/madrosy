<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('waktu_transaksi');
            $table->string('status_transaksi');
            $table->string('transaksi_id')->unique();
            $table->string('toko');
            $table->string('keterangan_status');
            $table->string('kode_status');
            $table->string('tanda_terima');
            $table->string('waktu_penyelesaian');
            $table->string('jenis_pembayaran');
            $table->string('kode_pembayaran');
            $table->string('order_id')->unique();
            $table->string('merchant_id');
            $table->string('total');
            $table->string('mata_uang');
            $table->string('kode_persetujuan')->nullable();
            $table->string('penipuan_status')->nullable();
            $table->string('token');
            $table->string('link_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
