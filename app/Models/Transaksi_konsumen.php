<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_konsumen extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function konsumen(){
        return $this->BelongsTo(Konsumen::class, 'id_konsumen');
    }
    public function barang(){
        return $this->BelongsTo(Barang::class, 'id_barang');
    }
    public function jenis_transaksi(){
        return $this->BelongsTo(Jenis_transaksi::class, 'id_jenis_transaksi');
    }
}
