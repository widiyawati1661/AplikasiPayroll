
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Gaji Karyawan</title>

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
          <div>
            <div class="card-body">
            <h3>Riwayat Gaji Per Bulan</h3>
            <p>Juli 2021</p>
          <div class="form-group">
          </div>
          <table class="table 13 table-bordered">
        <tr>
          <th>No. Slip Gaji</th>
          <th>NIP</th>
          <th>Bulan</th>
          <th>Tahun</th>
          <th>Gaji</th>
          <th>Tunjangan Jabatan</th>
          <th>Tunjangan Keluarga</th>
          <th>Uang Makan</th>
          <th>Uang Transport</th>
          <th>Potongan PPh</th>
          <th>Lainnya</th>
          <th>Opsi</th>
          <br>
        </tr>
        @foreach($tabel_gaji as $g)
          <tr>
            <td>202107-89</td>
            <td>{{ $g->NIP }}</td>
            <td>{{ $g->Bulan }}</td>
            <td>{{ $g->Tahun }}</td>
            <td>{{ $g->Gaji }}</td>
            <td>{{ $g->Tunjangan_Jabatan }}</td>
            <td>{{ $g->Tunjangan_Keluarga }}</td>
            <td>{{ $g->Uang_Makan }}</td>
            <td>{{ $g->Uang_Transport }}</td>
            <td>{{ $g->Potongan_PPH }}</td>
            <td>{{ $g->Potongan_PPH }}</td>
            <td><a class="btn btn-success btn-sm" href="/slip">Lihat</a></td>

            <td>
          </tr>
        @endforeach
        
            


          </table>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-primary btn-sm" href="/gaji/cetak_slip" target="_blank">Cetak</a>
              <a class="btn btn-warning btn-sm" type="button">Edit</a>
              <a class="btn btn-danger btn-sm" type="button">Hapus</a>
                  </td>
            </div>
            
            </div>
          </div>
        </div>
        </div>

        
			</div>
		</div>
	</div>

      </main>

      <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

    </body>
</html>      