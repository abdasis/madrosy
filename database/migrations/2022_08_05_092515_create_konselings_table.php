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
        Schema::create('konselings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained();
            $table->date('tanggal');
            $table->text('kasus');
            $table->text('layanan');
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
        Schema::dropIfExists('konselings');
    }
};
