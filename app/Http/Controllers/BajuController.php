<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BajuController extends Controller
{
    //
    /*public function index()
    {
        $baju = DB::table('baju')->paginate(10); //jumlah per halaman
    	return view('index1',['baju' => $baju]);

    }*/
    public function index()
    {
        $baju = DB::table('baju')
            ->select(
                'kodebaju',
                'merkbaju',
                'stockbaju',
                DB::raw("CASE WHEN stockbaju > 0 THEN 'Y' ELSE 'N' END as tersedia")
            )
            ->paginate(10); // jumlah per halaman
        return view('index1', ['baju' => $baju]);
    }
    public function tambah()
    {
        return view('tambah1');
    }
    /*public function store(Request $request)
    {
        DB::table('baju')->insert([
            'kodebaju' => $request->kodebaju,
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/baju');

    }*/
    public function store(Request $request)
    {
        DB::table('baju')->insert([
            'kodebaju' => $request->kodebaju,
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
        ]);
        return redirect('/baju');
    }
    public function edit($kodebaju)
    {
        $baju = DB::table('baju')->where('kodebaju',$kodebaju)->get();
        return view('edit1',['baju' => $baju]);
    }
    /*public function update(Request $request)
    {
        DB::table('baju')->where('kodebaju',$request->kodebaju)->update([
            'kodebaju' => $request->kodebaju,
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/baju');
    }*/
    public function update(Request $request)
    {
        DB::table('baju')->where('kodebaju', $request->kodebaju)->update([
            'kodebaju' => $request->kodebaju,
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
        ]);
        return redirect('/baju');
    }
    public function hapus($kodebaju)
    {
        DB::table('baju')->where('kodebaju',$kodebaju)->delete();
        return redirect('/baju');
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$baju = DB::table('baju')
		->where('merkbaju','like',"%".$cari."%")
		->paginate();
		return view('index1',['baju' => $baju]);

	}
}
