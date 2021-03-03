@extends('layout/main')

@section('title', 'Website Informasi Kelurahan Ngaglik')

@section('container')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">First slide label</h1>
          <hr class="my-4">
          <p class="lead">Some representative placeholder content for the second slide.</p>
          <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">Second slide label</h1>
          <hr class="my-4">
          <p class="lead">Some representative placeholder content for the second slide.</p>
          <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4 fw-bold">Third slide label</h1>
          <hr class="my-4">
          <p class="lead">Some representative placeholder content for the second slide.</p>
          <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container mt-4 mb-4">
  <div class="row">
    
    <div class="col-md-8 border rounded pt-4">

      <div class="alert alert-warning text-center fw-bold" role="alert">
        PENGUMUMAN!
      </div>

      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="..." alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h6 class="card-title">PENGAKTIFAN KEMBALI KAMPUNG TANGGUH SEMERU</h6>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col-md-2">
            <img src="..." alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h6 class="card-title">CORONA SEGERA HILANG DARI BUMI INDONESIA</h6>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col-md-2">
            <img src="..." alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h6 class="card-title">Sosialisasi Pemberlakuan Pembatasan Kegiatan Masyarakat (PPKM)</h6>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

        </div>
      </div>
      

      <div class="alert alert-primary text-center fw-bold" role="alert">
        Berita Terbaru 
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
      

      {{-- <div class="card mb-3">
        <img src="1.jpeg" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card mb-3">
        <img src="2.jpeg" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card mb-3">
        <img src="3.jpg" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div> --}}

    </div>


    <div class="col-md-4 border rounded pt-4">

      <form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    
      <div class="text-center p-4">
        <img src="5.jpg" alt="">
      </div>

      <div class="text-center p-4">
        <img src="6.png" alt="">
      </div>
        
    </div>

  </div>

  </div>
@endsection