<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="{{ asset('/images/imglogo.png') }}" alt="logoapp" width="30" height="30">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      APLIKASI PAYROLL</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard">DASHBOARD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/data">DATA MASTER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/absensi">ABSENSI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/gaji">GAJI</a>
          </li>
          
        </ul>
        <form class="d-flex">
          
            <a class="w-100 btn btn-lg btn-success" type="submit" href="/login">LOGOUT</a>
        </form>
      </div>
    </div>
  </nav>