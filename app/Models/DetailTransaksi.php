<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $fillable = [
        'transaksi_id',
        'barang_id',
        'harga',
        'jumlah',
        'subtotal'
    ];

    public function Barang(){
        return $this->belongsTo(Barang::class);
    }

    public function Transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
}
