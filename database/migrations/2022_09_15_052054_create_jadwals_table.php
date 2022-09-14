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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->foreignId('guru_id')->constrained('gurus');
            $table->foreignId('mapel_id')->constrained('mapels');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('hari');
            $table->enum('status', ['aktif', 'nonaktif']);
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
        Schema::dropIfExists('jadwals');
    }
};
