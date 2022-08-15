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
        Schema::create('kategori_tagihans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahun_ajaran_id')->constrained();
            $table->string('nama_kategori');
            $table->enum('jenis_tagihan', ['bulanan', 'tahunan', 'insidental']);
            $table->boolean('cicilan')->default('0');
            $table->enum('status', ['aktif', 'non-aktif']);
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
        Schema::dropIfExists('kategori_tagihans');
    }
};
