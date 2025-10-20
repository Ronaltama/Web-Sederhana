<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
Schema::create('spesifikasi_mobils', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('id_mobil');
    $table->string('tipe_mesin');
    $table->string('kapasitas_mesin');
    $table->string('transmisi');
    $table->string('warna');
    $table->year('tahun');
    $table->timestamps();

    $table->foreign('id_mobil')->references('id_mobil')->on('mobils')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_mobils');
    }
};