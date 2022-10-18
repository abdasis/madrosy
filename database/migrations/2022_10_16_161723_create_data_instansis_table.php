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
        Schema::create('data_instansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('no_statistik')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->text('alamat');
            $table->string('kode_pos')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('no_sk')->nullable();
            $table->date('tanggal_sk')->nullable();
            $table->string('tahun_berdiri');
            $table->string('akreditasi');
            $table->string('nama_kepsek');
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('data_instansis');
    }
};
