@extends('layout/main')

@section('title', 'Website Informasi Desa Ngaglik')

@section('container')
{{-- Carousel Awal --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-start">
          <h1>Example headline.</h1>
          <p>Some representative placeholder content for the first slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-end">
          <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
{{-- Carousel Akhir --}}

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    
    <div class="col-md-8 border rounded pt-4">

      <div class="alert alert-warning text-center fw-bold" role="alert">
        PENGUMUMAN!
      </div>

      {{-- Pengumuman Awal --}}
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="1.jpeg" class="img-thumb" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h6 class="card-title">PENGAKTIFAN KEMBALI KAMPUNG TANGGUH SEMERU</h6>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col-md-2">
            <img src="2.jpeg" class="img-thumb" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h6 class="card-title">CORONA SEGERA HILANG DARI BUMI INDONESIA</h6>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col-md-2">
            <img src="3.jpeg" class="img-thumb" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h6 class="card-title">Sosialisasi Pemberlakuan Pembatasan Kegiatan Masyarakat (PPKM)</h6>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      {{-- Pengumuman Akhir --}}
      
      <div class="alert alert-primary text-center fw-bold" role="alert">
        Berita Terbaru 
      </div>

      {{-- Konten Awal --}}
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      {{-- Konten Akhir --}}

      {{-- Pagination Awal --}}
      <div class="container p-3">
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
      {{-- Pagination Akhir --}}

    </div>

    {{-- Sidebar Awal --}}
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
    {{-- Sidebar Akhir --}}

  </div>

  </div>
  <div class="clearfix"></div>
{{-- Body Awal --}}
@endsection