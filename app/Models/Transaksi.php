<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillabel = [
        'nomer_transaksi',
        'tanggal',
        'total'
    ];

    public function DetailTransaksi(){
        return $this->hasMany(DetailTransaksi::class);
    }
}
