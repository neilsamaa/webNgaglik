<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>@yield('title')</title>
</head>

{{-- Header Awal --}}
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
          <img src="/img/logo2.png" alt="Logo" width="170px" height="auto">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url('/profil')}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{url('/visimisi')}}">Visi & Misi</a></li>
              <li><a class="dropdown-item" href="{{url('/sejarah')}}">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="{{url('/dasarhukum')}}">Dasar Hukum</a></li>
              <li><a class="dropdown-item" href="{{url('/struktur')}}">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="{{url('/artilambang')}}">Arti Lambang Desa</a></li>
              <li><a class="dropdown-item" href="{{url('/wilayah')}}">Profil Wilayah Desa</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/berita')}}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/kelembagaan')}}">Kelembagaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/data')}}">Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/agenda')}}">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('#kontak')}}">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
{{-- Header Akhir --}}

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    @yield('container')
    {{-- <div class="container p-4">
      <div class="row">
        <div class="col-md-8 border rounded pt-4">
          @yield('content')
        </div>
        <div class="col-md-4 border rounded pt-4">
          @section('sidebar')
          @show
        </div>
      </div>
    </div> --}}
    

</body>

{{-- Footer Awal --}}
<footer class="text-center text-light pt-4">
<div class="container-fluid" style="background-color:#343a40;padding-top: 15px; padding-bottom: 40px;">
  <div class="container">
  <div class="row">
    <div class="col text-start d-none d-md-block">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="/img/logo2.png" alt="Logo" width="230px" height="auto">
      </a>
    </div>
    
    <div class="col text-start">
      <h4>Links</h4>
      <ul>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>
    <div class="col text-start">
      <h4>Ikuti Kami</h4>
      <a href="http://facebook.com"><i class="bi bi-facebook"></i> Facebook</a><br>
      <a href="http://twitter.com"><i class="bi bi-twitter"></i> Twitter</a><br>
      <a href="http://telegram.com"><i class="bi bi-telegram"></i> Telegram</a>
    </div>
    <div class="col text-start" id="kontak">
      <h4>Kontak</h4>
      <i class="bi bi-building"></i> Kampus III
      <br>
      <i class="bi bi-map-fill"></i> Jl. Raya Tlogomas No.246 Malang, Jawa Timur
      <br>
      <i class="bi bi-telephone-fill"></i> Phone: +62822xxxxxx
      <br>
      <i class="bi bi-envelope-fill"></i> E-mail: example@mail.com
    </div>
  </div>
</div>
</div>

<div class="container-fluid bg-dark p-1">
  <p>Copyright © 2021 - Kelurahan Ngaglik</p>
  <a id="toTop" class="go-to-top border border-2" href="#" title="Go to Top" style=""><i class="bi bi-caret-up-fill"></i></a>
</div>

</footer>
{{-- Footer Akhir --}}

</html>