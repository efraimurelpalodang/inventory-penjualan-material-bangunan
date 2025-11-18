<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['role_id','username','password','nama_pengguna','jk','telp'];

    public function bk(): HasMany
    {
        return $this->hasMany(barangKeluar::class);
    }

    public function bm(): HasMany
    {
        return $this->hasMany(barangMasuk::class);
    }

    public function so(): HasMany
    {
        return $this->hasMany(salesOrder::class);
    }

    public function transaksi(): HasMany
    {
        return $this->hasMany(transaksiPenjualan::class);
    }

    public function suratJalan(): HasMany
    {
        return $this->hasMany(suratJalan::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(role::class);
    }
}
