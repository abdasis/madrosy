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
        Schema::create('riyawat_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained();
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah');
            $table->date('tahun_masuk');
            $table->date('tahun_lulus');
            $table->string('jurusan')->nullable();
            $table->string('dibuat_oleh');
            $table->string('diubah_oleh')->nullable();
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
        Schema::dropIfExists('riyawat_pendidikans');
    }
};
