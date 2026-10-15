<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function getBarang(){
        $barang = Barang::all();
        die($barang);
    }
}
