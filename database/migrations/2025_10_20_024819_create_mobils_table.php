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
Schema::create('mobils', function (Blueprint $table) {
    $table->id('id_mobil');
    $table->unsignedBigInteger('id_admin');
    $table->string('nama_mobil');
    $table->string('merek');
    $table->text('deskripsi')->nullable();
    $table->string('foto')->nullable();
    $table->decimal('harga', 15, 2);
    $table->timestamps();

    $table->foreign('id_admin')->references('id_admin')->on('admins')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};