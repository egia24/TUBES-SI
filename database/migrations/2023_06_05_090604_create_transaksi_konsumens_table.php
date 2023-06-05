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
        Schema::create('transaksi_konsumens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konsumen')->nullable();
            $table->unsignedBigInteger('id_barang')->nullable(); 
            $table->unsignedBigInteger('id_jenis_transaksi')->nullable();
            $table->string('id_transaksi_konsumen')->nullable(); 
            $table->string('jumlah_barang')->nullable(); 
            $table->string('tanggal_transaksi_konsumen')->nullable();
            $table->string('total_harga_konsumen')->nullable();
            $table->timestamps();
        });
        Schema::table('transaksi_konsumens', function (Blueprint $table) {
            $table->foreign('id_konsumen')->references('id')->on('konsumens');
            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('id_jenis_transaksi')->references('id')->on('jenis_transaksis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_konsumens');
    }
};
