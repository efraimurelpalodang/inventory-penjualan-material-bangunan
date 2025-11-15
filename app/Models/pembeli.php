<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pembeli extends Model
{
    protected $fillable = ['nama_pembeli','alamat','telp'];

    public function so() :BelongsTo 
    {
        return $this->belongsTo(salesOrder::class);    
    }

    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(transaksiPenjualan::class);
    }
}
