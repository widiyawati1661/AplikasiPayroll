<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\karyawanpdf;
use PDF;
 


class GajiController extends Controller
{
    public function gajikaryawan()
    {
    	// mengambil data dari table
        //buat variabel untuk simpan datanya
    	$tabel_gaji = DB::table('tabel_gaji')->get();
 
    	// mengirim data karyawan  ke view 
    	return view('gajikaryawan',['tabel_gaji' => $tabel_gaji]);
    }
    //method buat cetak pdf
    public function cetak_slip()
    {
		//ambil semua data simpan di variabel $tabel_gaji
    	//$tabel_gaji = DB::all();
    	$tabel_gaji = DB::table('tabel_gaji')->paginate(12);

 
		//gunakan dompdf dengan pdf::loadview() sampai nanti buka view
		//nama view diisi slipggaji
		//passing data ke gajikaryawan
    	$pdf2 = PDF::loadview('slipgajikaryawan',['gajikaryawan'=>$tabel_gaji]);
    	//return fungsi download dari package dompdf
		//return $pdf2->download('laporan-karyawan-pdf');
		//return untuk tampilkan saja
		return $pdf2->stream();

    }
}
