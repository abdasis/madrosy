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
        Schema::create('preferensis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_layout')->default('light');
            $table->string('warna_topbar')->default('light');
            $table->string('warna_sidebar')->default('light');
            $table->boolean('is_preloading')->default(1)->comment('0 untuk mematikan preloading');
            $table->string('mode_aplikasi')->default('light');
            $table->string('ukuran_layout')->default('fluid');
            $table->string('posisi_layout')->default('fixed');
            $table->string('tampilan_layout')->default('default');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('preferensis');
    }
};
