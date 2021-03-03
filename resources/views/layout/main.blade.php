<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        /* .carousel-item {
            height: 670px;
        } */
        .carousel-item img {
            margin-top: 0px;
        }
        .carousel-item .display-4  {
            margin-top: 70px;
        }
        .carousel-item hr {
            border-color: #F05F40;
            width: 70%;
            border-width: 3px;
        }
        .carousel-item .btn {
            background-color: #F05F40;
            border: none;
            border-radius: 25px;
            padding-right: 25px;
            padding-left: 25px;
            margin-top: 40px;
        }
        .widget {
          overflow: hidden;
          word-wrap: break-word;
          margin-bottom: 40px;
          font-size: 15px;
          font-style: normal;
          font-weight: 400;
          line-height: 1.7;
          color: #4c4f53;
          background: #fff;
          padding: 20px;
        }
        #toTop {
          position: fixed;
          right: 30px;
          bottom: 20px;
          z-index: 1041;
          display: inline-block;
          width: 44px;
          height: 44px;
          line-height: 44px;
          text-align: center;
          font-family: sans-serif;
          font-size: 16px;
          color: #4c4f53;
          background-color: #ffffff;
          border-radius: 50%;
          box-shadow: 0 14px 28px -4px rgb(14 17 20 / 15%);
          -webkit-transition: all 0.2s ease;
          -moz-transition: all 0.2s ease;
          -o-transition: all 0.2s ease;
          transition: all 0.2s ease;
        }
    </style>
    <title>@yield('title')</title>
</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
          <img src="logo-pendem.png" alt="Logo" width="170px" height="auto">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url('/profil')}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Struktur</a></li>
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
            <a class="nav-link" href="{{url('/kontak')}}">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<body>
    @yield('container')

    <div class="container">
      <nav aria-label="...">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

<footer class="container-fluid bg-white p-3 text-center">
  <a id="toTop" class="go-to-top border border-2" href="#" title="Go to Top" style="">
    <i class="bi bi-caret-up-fill"></i>
    </a>
  <p>All Right Reserved 2021 | Theme: by</p>
</footer>

</html>