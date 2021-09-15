
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Tambah Data Master</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
<link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
		<div class="row py-lg-5">
			<div class="col-lg-6 col-md-8 mx-auto">
			</div>
		  </div>

		<div class="container">

		<h3>Data Karyawan</h3>
		<a href="/data"> Kembali</a>
		<br/>
		<br/>
	<!-- csrf buat generate kode otomatis dlm bewntuk hidden fungsinya buat cegah inputan data diluar app -->
		<form action="/data/store" method="post">
			{{ csrf_field() }}
			<div class="col-12">
			NIP <input type="text" name="NIP" required="required"> <br/>
			Nama <input type="text" name="Nama" required="required"> <br/>
			Tanggal_Lahir <input type="text" name="Tanggal_Lahir" required="required"> <br/>
			Jenis Kelamin <input type="text" name="Jenis_Kelamin" required="required"> <br/>
			Agama <input type="text" name="Agama" required="required"> <br/>
      		Status_Nikah <input type="text" name="Status_Nikah" required="required"> <br/>
			Jumlah_Tanggungan <input type="text" name="Jumlah_Tanggungan" required="required"> <br/>
			Alamat <input type="text" name="Alamat" required="required"> <br/>
			No_Telepon <input type="text" name="No_Telepon" required="required"> <br/>
			Pendidikan_Terakhir <input type="text" name="Pendidikan_Terakhir" required="required"> <br/>
			Kode_Jabatan <input type="text" name="Kode_Jabatan" required="required"> <br/>
			Kode_Departemen <input type="text" name="Kode_Departemen" required="required"> <br/>
			Gaji <input type="text" name="Gaji" required="required"> <br/>
			Tanggal_Masuk <input type="text" name="Tanggal_Masuk" required="required"> <br/>
			Tanggal_Habis_Kontrak <input type="text" name="Tanggal_Habis_Kontrak" required="required"> <br/>
			No_Rek <input type="text" name="No_Rek" required="required"> <br/>
			Nama_Bank <input type="text" name="Nama_Bank" required="required"> <br/>
			Atas_Nama_Bank <input type="text" name="Atas_Nama_Bank" required="required"> <br/>
			</div>
			<input type="submit" value="Simpan Data">
		</form>
		
		</div>
 
		<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
	</body>
</html>