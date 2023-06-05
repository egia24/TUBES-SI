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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_distributor')->nullable();
            $table->string('id_barang')->nullable();
            $table->string('nama_barang')->nullable(); 
            $table->string('harga_barang')->nullable(); 
            $table->string('stok')->nullable(); 
            $table->timestamps();
        });

        Schema::table('barangs', function (Blueprint $table) {
            $table->foreign('id_distributor')->references('id')->on('distributors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};

