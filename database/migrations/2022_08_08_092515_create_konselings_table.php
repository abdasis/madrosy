<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('konselings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained();
            $table->date('tanggal');
            $table->foreignId('pelanggaran_id')->constrained();
            $table->text('keterangan')->nullable();
            $table->unsignedBigInteger('dibuat_oleh');
            $table->unsignedBigInteger('diubah_oleh')->nullable();
            $table->string('foto_bukti')->nullable();
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
        Schema::dropIfExists('konselings');
    }
};
