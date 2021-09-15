<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanController extends Controller
{
	//method ambil dan tampil data dari db_laravel
    public function profilkaryawan()
    {
    	// mengambil data dari tabel database tabel_karyawan
    	$tabel_karyawan = DB::table('tabel_karyawan')->get();
 
    	// mengirim data karyawan ke view profilkaryawan
    	return view('profilkaryawan',['tabel_karyawan' => $tabel_karyawan]);
 
    }

	//method function tampilkan form tambah
	public function tambah(){
		//panggil view tambah
		return view('tambah');
	}

	//method function tampilkan insert data ke tabel
	public function store(Request $request){
		DB::table('tabel_karyawan')->insert([
			'NIP' =>$request->id,
			'Nama_Karyawan' =>$request->nama,
			'Jenis_Kelamin' =>$request->jenis_kelamin,
			'Agama' =>$request->agama,
			'Alamat' =>$request->alamar,
			'No_Telepon' =>$request->telepon,
		]);
		//diarahkan ke halaman
		return redirect('/profilkaryawan');
	}

	//method function tampilkan form edit
	public function edit($id){
		//ambil data berdasarkan id dipilih
		$karyawan = DB::table('tabel_karyawan')->where('NIP', $id)->get();
		//passing data yang didapat ke view edit.blade.php
		return view('edit',['tabel_karyawan' => $karyawan]);
	}

	//method function tampilkan form update
	public function update(Request $request){
		//update
		DB::table('tabel_karyawan')->where('NIP', $request->id)->update([
			'NIP' =>$request->id,
			'Nama_Karyawan' =>$request->nama,
			'Jenis_Kelamin' =>$request->jenis_kelamin,
			'Agama' =>$request->agama,
			'Alamat' =>$request->alamar,
			'No_Telepon' =>$request->telepon,
		]);
		//diarahkan ke halaman
		return redirect('/profilkaryawan');
	}

	//method function tampilkan form delete
	public function hapus($id){
		//ambil data berdasarkan id dipilih
		$karyawan = DB::table('tabel_karyawan')->where('NIP', $id)->get();
		//diarahkan ke halaman
		return redirect('/profilkaryawan');
	}


}
