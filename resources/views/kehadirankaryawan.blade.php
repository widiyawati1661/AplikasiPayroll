
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Absensi Karyawan</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

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



      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
        </div>
      </div>

      <div class="container">
		    <div class="card">
			    <div class="card-body">
				
				<h3>Absensi Karyawan</h3>
        <div class="col-md-3">
          <label for="tanggal" class="form-label">List absensi harian</label>
          <br>
         <p>
          <script language="javascript">
            sekarang= new Date();
            document.write("Hari ini " + sekarang.getDate() + "-" + (sekarang.getMonth()+1) + "-" + sekarang.getFullYear() + ", jam: " + sekarang.getHours() + ":" + sekarang.getMinutes() + ":" + sekarang.getSeconds());
          </script>
         </p>
          <input type="text" id="tanggal" placeholder="tanggal ..." required>
          <input class="btn btn-primary btn-sm" type="submit" value="CARI">
        </div>
				<br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
            <table class="table table-light table-border bg-light p-5 rounded">
              <tr>
                  <th>NIP</th>
                  <th>Absen Masuk</th>
                  <th>Absen Keluar</th>
                  <th>Lembur</th>
                  <th>Cuti</th>
                  <th>Izin Sakit</th>
                  <th>Total Jam Kerja</th>
                  <th>Upah Per Hari Kerja</th>
              </tr>
              <tr>
                  <td>62345</td>
                  <td>07.50</td>
                  <td>17.05</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>8 Jam</td>
                  <td>106.128</td>
              </tr>
              <tr>
                <td>62346</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62347</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62348</td>
                <td>07.50</td>
                <td>12.00</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>4 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62349</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62350</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62351</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62352</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62353</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62354</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
              <tr>
                <td>62355</td>
                <td>07.50</td>
                <td>17.05</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>8 Jam</td>
                <td>106.128</td>
              </tr>
        </table>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary btn-sm" type="button">Selanjutnya</button>
        </div>
          </div>
        </div>
  
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
          </div>
         </div>

  <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>      
