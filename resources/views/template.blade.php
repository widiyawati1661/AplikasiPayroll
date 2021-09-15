

<!DOCTYPE html>
<html>
<head>
	<title>Tampilin data di db</title>
</head>
<body>
 
	<h3>Data Pegawai</h3>
 
	<a href="/tabel_karyawan/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
		</tr>
		@foreach($tabel_karyawan as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama_Karyawan }}</td>
			<td>{{ $k->Jenis_Kelamin }}</td>
			<td>{{ $k->Agama }}</td>
			<td>
				<a href="/tabel_karyawan/edit/{{ $k->NIP }}">Edit</a>
				
				<a href="/tabel_karyawan/hapus/{{ $k->NIP }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
