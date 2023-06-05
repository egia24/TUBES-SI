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
        Schema::create('kritik_sarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->string('id_kritik_saran')->nullable();
            $table->string('isi_kritik_saran')->nullable(); 
            $table->string('tanggal_kritik_saran')->nullable(); 
            $table->timestamps();
        });
        
        Schema::table('kritik_sarans', function (Blueprint $table) {
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik_sarans');
    }
};
