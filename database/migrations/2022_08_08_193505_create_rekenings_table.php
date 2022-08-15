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
        Schema::create('rekenings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained()->cascadeOnDelete();
            $table->string('nomor_rekening')->unique();
            $table->enum('jenis_rekening', ['harian', 'tabungan']);
            $table->decimal('limit_harian')->nullable()->default(0);
            $table->string('passcode');
            $table->enum('status', ['aktif', 'non-aktif']);
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
        Schema::dropIfExists('rekenings');
    }
};
