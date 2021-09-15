<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\karyawanpdf;
use PDF;
 

class ProfilController extends Controller
{

	
    //method ambil dan tampil data dari db_laravel
    public function profilkaryawan()
    {
    	// mengambil data dari tabel database tabel_karyawan
    	$tabel_karyawan = DB::table('tabel_karyawan')->paginate(10);
 
    	// mengirim data karyawan ke view profilkaryawan
    	return view('profilkaryawan',['tabel_karyawan' => $tabel_karyawan]);
 
    }

	//method function tampilkan form tambah
	public function tambah(){
		$tabel_karyawan = DB::table('tabel_karyawan')->get();
		//panggil view tambah
		return view('tambah',['tabel_karyawan' => $tabel_karyawan]);
	}

	//method function tampilkan insert data ke tabel pakai query builder
	public function store(Request $request){
		DB::table('tabel_karyawan')->insert([
			'NIP' => $request->NIP,
			'Nama_Karyawan' =>$request->Nama,
			'Tanggal_Lahir' =>$request->Tanggal_Lahir,
			'Jenis_Kelamin' =>$request->Jenis_Kelamin,
			'Agama' =>$request->Agama,
			'Status_Nikah' =>$request->Status_Nikah,
			'Jumlah_Tanggungan' =>$request->Jumlah_Tanggungan,
			'Alamat' =>$request->Alamat,
			'No_Telepon' =>$request->No_Telepon,
			'Pendidikan_Terakhir' =>$request->Pendidikan_Terakhir,
			'Kode_Jabatan' =>$request->Kode_Jabatan,
			'Kode_Departemen' =>$request->Kode_Departemen,
			'Gaji' =>$request->Gaji,
			'Tanggal_Masuk' =>$request->Tanggal_Masuk,
			'Tanggal_Habis_Kontrak' =>$request->Tanggal_Habis_Kontrak,
			'No_Rek' =>$request->No_Rek,
			'Nama_Bank' =>$request->Nama_Bank,
			'Atas_Nama_Bank' =>$request->Atas_Nama_Bank,
			
		]);
		//diarahkan ke halaman
		return redirect('/data');
	}

	//method function tampilkan form edit
	public function edit($id){
		//ambil data berdasarkan id dipilih
		$tabel_karyawan = DB::table('tabel_karyawan')->where('tabel_karyawan.id', $id)->get();
		//passing data yang didapat ke view edit.blade.php
		$tabel_karyawan = DB::table('tabel_karyawan')->get();
		return view('edit',['tabel_karyawan' => $tabel_karyawan]);
	}

	//method function tampilkan form update
	public function update(Request $request){
		//update
		DB::table('tabel_karyawan')->where('tabel_karyawan', $request->id)->update([
			'NIP' =>$request->NIP,
			'Nama_Karyawan' =>$request->Nama,
			'Kode_Jabatan' =>$request->Jabatan,
			'Kode_Departemen' =>$request->Departemen,
		]);
		//diarahkan ke halaman
		return redirect('/data');
	}

	//method function tampilkan form delete
	public function hapus($id){
		//ambil data berdasarkan id dipilih
		//$tabel_karyawan = DB::table('tabel_karyawan')->where('tabel_karyawan', $id)->get();
		$post->Post::find($id);
		$post->delete();
		//diarahkan ke halaman
		return redirect('/data')-> with('success','Data sudah dihapus');
	}

    //method function cari
    public function cari(Request $request){
        //menangkap data hasil pencarian
        $cari = $request->cari;

        //mengambil  data dari tabel
        $tabel_karyawan = DB::table('tabel_karyawan')
        ->where('Nama_Karyawan','like',"%".$cari."%")
        ->paginate();

        //kirim data ke halaman view
        return view('profilkaryawan', ['tabel_karyawan' => $tabel_karyawan]);
    }

 
	//method buat cetak pdf
    public function cetak_pdf()
    {
		//ambil semua darta simpan di variabel$tabel_karyawan
    	//$tabel_karyawan = DB::all();
    	$tabel_karyawan = DB::table('tabel_karyawan')->paginate(12);

 
		//gunakan dompdf dengan pdf::loadview() sampai nanti buka view
		//nama view diisu karyawan_pdf
		//passing data ke profilkarjyawan
    	$pdf = PDF::loadview('karyawan_pdf',['profilkaryawan'=>$tabel_karyawan]);
    	//return fungsi download dari package dompdf
		//return $pdf->download('laporan-karyawan-pdf');
		//return untuk tampilkan saja
		return $pdf->stream();

    }
}
