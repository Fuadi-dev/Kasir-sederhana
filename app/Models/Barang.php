<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga_barang',
        'stok',
    ];

    public function DetailTransaksi(){
        return $this->hasMany(DetailTransaksi::class);
    }
}
