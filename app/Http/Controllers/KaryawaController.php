<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class KaryawaController extends Controller
{
    public function template()
    {
    	// mengambil data dari table
        //buat variabel untuk simpan datanya
    	$tabel_karyawan = DB::table('tabel_karyawan')->get();
 
    	// mengirim data karyawan  ke view 
    	return view('template',['tabel_karyawan' => $tabel_karyawan]);
 
    }
}
