
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login Aplikasi Payroll</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">


    

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
    <link href="{{asset('signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <div class="container">
      <div class="row py-lg-5">
        <div class="col-lg-12 col-md-8 mx-auto">
        </div>
      </div>
        <div class="card-body">
            <main class="form-signin" width="50%">
                <form>
                  <img src="{{ asset('/images/imglogo.png') }}"  alt="" width="70" height="70">
                  <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
                  <br>
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="admin@example.com">
                    <label for="floatingInput">Email</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
              
                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Sebagai Administrator
                    </label>
                  </div>
                  <br>
                  <a class="btn btn-primary btn-sm" href="/register" target="_blank">REGISTER</a>
                  <div class="checkbox mb-3">
                    
                  </div>
                  <a class="w-100 btn btn-lg btn-primary" type="submit" href="/dashboard">LOGIN</a>
                  <p class="mt-5 mb-3 text-muted">&copy; 18111280_Widiyawati_TIFK18CID</p>
                </form>
              </main>  
        </div>
      </div>
  </body>
</html>
