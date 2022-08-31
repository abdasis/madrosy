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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained();
            $table->foreignId('kategori_tagihan_id')->constrained();
            $table->string('kode_tagihan')->unique();
            $table->date('tgl_dibuat');
            $table->date('tgl_jatuh_tempo');
            $table->decimal('total_tagihan', 20,2);
            $table->enum('status', ['lunas', 'belum dibayar', 'telat']);
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('dibuat_oleh');
            $table->unsignedBigInteger('diubah_oleh')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tagihans');
    }
};
