<html>
<head>
	<title>Aplikasi Payroll</title>
	<link rel="stylesheet" type="text/css" href="public\AdminLTE\AdminLTE-3.1.0\dist\css">
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">

			<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
				
 
				<h2 class="text-center"><a href="h">w</a></h2>
 
				<h3>Data Pegawai</h3>
 
				<p>Cari Data Pegawai :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
 
				<br/>
 
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Tangal Masuk</th>
						<th>Opsi</th>
					</tr>
					
					<tr>
						</td>
					</tr>
					
				</table>
 
				<br/>
				
				<br/>
 
				
			</div>
		</div>
	</div>
 
 
</body>
</html>