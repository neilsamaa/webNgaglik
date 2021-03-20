@extends('layout/main')

@section('title', 'Website Informasi Kelurahan Ngaglik')

@section('container')

{{-- Body Awal --}}
    @section('content')
      <div class="alert alert-warning text-center fw-bold" role="alert">PENGUMUMAN!</div>

      {{-- Pengumuman Awal --}}
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
      {{-- Pengumuman Akhir --}}
      
      <div class="alert alert-primary text-center fw-bold" role="alert">Berita Terbaru</div>

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
    @endsection
      {{-- Pagination Akhir --}}
      
      

    {{-- Sidebar Awal --}}
    @section('sidebar')
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
      @endsection
    {{-- Sidebar Akhir --}}

{{-- Body Akhir --}}
@endsection