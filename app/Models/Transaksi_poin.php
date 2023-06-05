<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_poin extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pelanggan(){
        return $this->BelongsTo(Pelanggan::class, 'id_pelanggan');
    }
    public function poin(){
        return $this->BelongsTo(Poin::class, 'id_poin');
    }
}
