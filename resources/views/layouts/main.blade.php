<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Home | {{ $title }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
          <div class="left">
            <a class="navbar-brand" href="/">Pulsat</a>
          </div>
          <div class="right">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link text-warning {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/home">Beranda</a>
                <a class="nav-link text-warning {{ ($title == "Alat Berat") ? 'active' : '' }}" href="#">Alat Berat</a>
                <a class="nav-link text-warning {{ ($title == "Kontak") ? 'active' : '' }}" href="#">Kontak</a>
                <a class="nav-link text-warning {{ ($title == "Riwayat Sewa") ? 'active' : '' }}" href="#">Riwayat Sewa</a>
                <a class="nav-link text-warning " href="#">Logout</a>
                <a class="nav-link text-light " href="#">
                  <span class="text-warning">|</span>
                  User
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="column">
        @yield('container')
      </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>