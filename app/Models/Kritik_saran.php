<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik_saran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pelanggan(){
        return $this->BelongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
