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
        Schema::create('jenis_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('id_jenis_transaksi')->nullable();
            $table->string('nama_transaksi')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('jenis_transaksis');
    }
};
