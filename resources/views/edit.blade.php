<!DOCTYPE html>
<html>
<head>
	<title>Form Edit data</title>
</head>
<body>
	<h3>Edit Pegawai</h3>
	<a href="/data"> Kembali</a>
	<br/>
	<br/>
	@foreach($tabel_karyawan as $e)
	<form action="/tabel_karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $e->NIP }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $e->Nama_Karyawan }}"> <br/>
		Jenis Kelamin <input type="text" required="required" name="jabatan" value="{{ $e->Jenis_Kelamin }}"> <br/>
		Agama <input type="number" required="required" name="umur" value="{{ $e->Agama }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $e-Alamat }}</textarea> <br/>
        No Telepon <input type="number" required="required" name="umur" value="{{ $e->No_Telepon }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>