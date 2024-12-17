<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $karyawan1 = DB::table('karyawan1')->get();
    	return view('index3',['karyawan1' => $karyawan1]);

    }
    public function tambah()
    {
        return view('tambah3');
    }
    public function store(Request $request)
    {
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/karyawan1');

    }
    public function hapus($NIP)
    {
        $karyawan = DB::table('karyawan1')->where('NIP',$NIP)->first();
        if ($karyawan) {
            return view('hapus3', ['karyawan1' => $karyawan]);
        } else {
            return redirect('/karyawan1')->with('error', 'Data tidak ditemukan');
        }
    }
    public function delete($NIP)
    {
    // Hapus data karyawan
    DB::table('karyawan1')->where('NIP', $NIP)->delete();

    return redirect('/karyawan1');
    }
}
