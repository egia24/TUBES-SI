<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksi_poins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->unsignedBigInteger('id_poin')->nullable();
            $table->string('id_transaksi_poin')->nullable();
            $table->string('tanggal_transaksi_poin')->nullable(); 
            $table->string('jumlah_poin')->nullable(); 
            $table->timestamps();
        });
        Schema::table('transaksi_poins', function (Blueprint $table) {
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
            $table->foreign('id_poin')->references('id')->on('poins');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaksi_poins');
    }
};
