
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Register Aplikasi Payroll</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    
    <!-- Custom styles for this template -->
    
    <link href="{{asset('form-validation.css')}}" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{ asset('/images/imglogo.png') }}"  alt="" width="70" height="70">
      <h2>Register</h2>
    </div>

    
            <div class="col-12">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="Name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-12">
              <label for="name" class="form-label">NIP</label>
              <input type="text" class="form-control" id="Name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-12">
              <label for="name" class="form-label">Jabatan</label>
              <input type="text" class="form-control" id="Name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-12">
              <label for="name" class="form-label">Divisi</label>
              <input type="text" class="form-control" id="Name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-12">
              <label for="name" class="form-label">No Telepon</label>
              <input type="text" class="form-control" id="Name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-md-12">
              <label for="state" class="form-label">Masuk Sebagai</label>
              <select class="form-select" id="state" required>
                <option value="">Pilih...</option>
                <option>HRD</option>
                <option>Admin</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          <div class="col-12">
            <label for="name" class="form-label">Password</label>
            <input type="text" class="form-control" id="Name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-12">
            <label for="name" class="form-label">Ulangi Password</label>
            <input type="text" class="form-control" id="Name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <br>

        

          
          <a class="w-100 btn btn-lg btn-primary" type="submit" href="/dashboard">REGISTER</a>
          <p class="mt-5 mb-3 text-muted">&copy; 18111280_Widiyawati_TIFK18CID</p>
        </form>
      </div>
    </div>
  </main>

  
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
