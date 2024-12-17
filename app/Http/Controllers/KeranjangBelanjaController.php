<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    //
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
    	return view('index2',['keranjangbelanja' => $keranjangbelanja]);

    }
    public function tambah()
    {
        return view('tambah2');
    }
    public function store(Request $request)
    {
        //$lastId = DB::table('keranjangbelanja')->max('ID');
        //$newId = $lastId ? $lastId + 1 : 1;
        //if (DB::table('keranjangbelanja')->where('ID', $newId)->exists()) {
        //return redirect('/keranjangbelanja')->with('error', 'ID sudah ada.');
        //}
        DB::table('keranjangbelanja')->insert([
            //'ID' => $newId,
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        return redirect('/keranjangbelanja');

    }
    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID',$id)->delete();
        return redirect('/keranjangbelanja');
    }
}
