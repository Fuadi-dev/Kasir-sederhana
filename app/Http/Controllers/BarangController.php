<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function getBarang(){
        $barang = Barang::all();
        return view('welcome', compact('barang'));
    }

    public function formBarang(){
        return view('add');
    }

    public function postBarang(Request $request){
        $barang = $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $berhasil = Barang::create($barang);
        if($berhasil){
            return redirect('/');
        }else{
            return redirect('add-barang');
        }
    }

}
