
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Slip Gaji Karyawan</title>

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

      <main class="container">
        <div class="row py-lg-5">
            <div class="col-lg-12 col-md-8 mx-auto">
            </div>
        </div>

  

        <br>

        <div class="card border-info">
          <div class="card-header">Slip Gaji Karyawan</div>
            <div class="card-body">
              <nav class="navbar navbar-light bg-light">
                <div class="container">
                  <a class="navbar-brand" href="#">
                    <img src="{{ asset('/images/imglogo.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    PT Wysakarya Indah Nusantara
                  </a>
                </div>
              </nav>
              <h5 class="card-title">1 Juli 2021 - 27 Juli 2021</h5>
              <img src="{{ asset('/images/imglogo.png') }}" style= max-width: 3% alt="logo" title="logo">
              <br>
              <br>
            
              <table class="table table-bordered">
                <tr>
                  </td>
                </tr>
                <ul class="list-group list-group-horizontal">
                  <li class="list-group-item">Nama Karyawan: <br> Anita Sukma</li>
                  <li class="list-group-item">NIP Karyawan: <br> 612345</li>
                  <li class="list-group-item">Jabatan: <br> Administrasi</li>
                  <li class="list-group-item">Tingkatan: <br> Op3</li>
                  <li class="list-group-item">Departemen: <br> Office</li>
                  <li class="list-group-item">Jenis Pembayaran: <br> Transfer Rek Payroll</li>
                  <li class="list-group-item">Slip No: <br> 202107-89</li>
                  <li class="list-group-item">Dicetak tanggal: <br> 2021-07-29</li>
                </ul>
                

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Absensi</th>
                      <th scope="col">Pendapatan</th>
                      <th scope="col">Potongan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Hari Kehadiran
                        <ul>
                          <li>27 hari</li>
                        </ul>
                      </td>
                      <td>Gaji Pokok
                        <ul>
                          <li>Rp. 2.000.000</li>
                        </ul>
                      </td>
                      <td>Cicilan Pinjaman
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>Hari Absen
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Uang Lembur
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Potongan Jamsostek
                        <ul>
                          <li>Rp. 142.345</li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>Hari Sakit w/ SKD
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Tunjangan Jabatan
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Potongan Absen
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>Ijin
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Uang Makan
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Potongan Terlambat
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>Hari Cuti
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Uang transport
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                      <td>Pajak PPh 21
                        <ul>
                          <li>0</li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="1">Total</td>
                      <td>
                        <ul>
                          <li>RP. 3,183,850</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </table>
              </div>
             
              <br>
          </div>
        </div>
        <br>
      </main>

      <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>      
