
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Data Master</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    </head>
    <body>
      @extends('layouts.app')
	  
	<main>
		<div class="row py-lg-5">
			<div class="col-lg-6 col-md-8 mx-auto">
			</div>
		  </div>  
	<div class="container">
		<h3 class="text-right">Data Payroll</a></h3>
		<br>
			 <div class="bg-light p-3 d-flex justify-content-between align-items-center">
				<div class="form-group">					
				</div>
				<form action="/data/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
					<input class="btn btn-primary btn-sm" type="submit" value="CARI">
				</form>
			  </div>
		
				<br/>
				
				<div class="bg-light p-3 d-flex justify-content-between">
					<a class="btn btn-primary btn-sm" href="/data/cetak_pdf" target="_blank">Cetak Data</a>
				</div>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>NIP Karyawan</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Jabatan</th>
						<th>Alamat</th>
						<th>No Telepon</th>
						<th>Opsi</th>
					</tr>
					
					@foreach($tabel_karyawan as $a)
								<tr>
									<td>{{ $a->NIP }}</td>
									<td>{{ $a->Nama_Karyawan }}</td>
									<td>{{ $a->Jenis_Kelamin }}</td>
									<td>{{ $a->Kode_Jabatan }}</td>
									<td>{{ $a->Alamat }}</td>
									<td>{{ $a->No_Telepon }}</td>
									<td>
										<a class="btn btn-success btn-sm" href="/data/store/{{ $a->NIP }}">View</a>
										<a class="btn btn-warning btn-sm" href="/data/edit/{{ $a->NIP }}">Edit</a>
										<a class="btn btn-danger btn-sm" href="/data/hapus/{id}">Hapus</a>
									</td>
								</tr>
					@endforeach		
				</table>
				<div class="bg-light p-3 d-flex justify-content-between">
				<a class="btn btn-primary btn-sm" href="/data/tambah">Tambah</a>
				</div>
			</div>
		</div>
		<br>
	</main>
			
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
 
</body>
</html>