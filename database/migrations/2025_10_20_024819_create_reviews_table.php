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
Schema::create('reviews', function (Blueprint $table) {
    $table->id('id_review');
    $table->unsignedBigInteger('id_admin');
    $table->string('nama_pelanggan');
    $table->text('isi_review');
    $table->integer('rating');
    $table->date('tanggal');
    $table->timestamps();

    $table->foreign('id_admin')->references('id_admin')->on('users')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};