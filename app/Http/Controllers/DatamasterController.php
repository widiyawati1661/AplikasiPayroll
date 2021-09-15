<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class DatamasterController extends Controller
{
    public function datamaster()
    {
    	// mengambil data dari table
        //buat variabel untuk simpan datanya
    	$tabel_karyawan = DB::table('tabel_karyawan')->get();
 
    	// mengirim data karyawan  ke view 
    	return view('tabel_karyawan',['tabel_karyawan' => $tabel_karyawan]);
 
    }
}
