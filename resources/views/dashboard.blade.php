
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard</title>

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

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Status</text></svg>

            <div class="card-body">
              <p class="card-text">KARYAWAN AKTIF</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Lihat</button>
                  <button type="button" class="btn btn-sm btn-warning">Edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Status</text></svg>

            <div class="card-body">
              <p class="card-text">KARYAWAN WFH</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Lihat</button>
                  <button type="button" class="btn btn-sm btn-warning">Edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Status</text></svg>
            <div class="card-body">
              <p class="card-text">KARYAWAN TOTAL</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">Lihat</button>
                  <button type="button" class="btn btn-sm btn-warning">Edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <table class=" container table table-dark table-borderless">
                <tr>
                    <th>Nama Akun</th>
                    <th>NIP</th>
                    <th>Jabatan</th>
                    <th>Terakhir Akses</th>
                </tr>
                <tr>
                    <td>Hrd@emailperusahaan.com</td>
                    <td>22345672</td>
                    <td>HRD</td>
                    <td>20-07-2021</td>
                </tr>
                <tr>
                    <td>Admin@emailperusahaan.com</td>
                    <td>23456781</td>
                    <td>Admin</td>
                    <td>21-07-2021</td>
                </tr>
                <tr>
                    <td>Hrd@emailperusahaan.com</td>
                    <td>24567890</td>
                    <td>HRD</td>
                    <td>25-07-2021</td>
                </tr>
              </table>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h3>Format Payroll</h3>
            <div class="form-group">
            </div>
            <form>
              <p>Cetak Payroll Update Juli 2021</p>
              <button class="btn btn-primary">Dowload</button>
            </form>
            <br/>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h3>Template Laporan</h3>
            <div class="form-group">
            </div>
            <form>
              <p>Template Laporan Keuangan Update 2021</p>
              <button class="btn btn-primary">Download</button>
            </form>
            <br/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</main>



    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
  </body>
</html>
