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
Schema::create('log_aktivitas', function (Blueprint $table) {
    $table->id('id_log');
    $table->unsignedBigInteger('id_admin');
    $table->string('aktivitas');
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
        Schema::dropIfExists('log_aktivitas');
    }
};