<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pengguna extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'penggunas';
    protected $fillable = ['role_id','username','password','nama_pengguna','jk','telp'];
    protected $hidden = ['password'];

    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => bcrypt($value)  
        );
    }

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

    public function username()
    {
        return 'username';
    }
}
