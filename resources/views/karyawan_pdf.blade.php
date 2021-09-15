<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan pdf</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
		<h3>Laporan Data</h3>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
				<th>Alamat</th>
				<th>Telepon</th>
                <th>Gaji</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($profilkaryawan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->NIP}}</td>
                <td>{{$p->Nama_Karyawan}}</td>
                <td>{{$p->Jenis_Kelamin}}</td>
                <td>{{$p->Agama}}</td>
				<td>{{$p->Alamat}}</td>
				<td>{{$p->No_Telepon}}</td>
                <td>{{$p->Gaji}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>