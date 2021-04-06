@extends('layout/main')

@section('title', 'Pengumuman Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">PENGUMUMAN DESA</h1>
      <hr>

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
    {{-- Content Akhir --}}

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
{{-- Body Akhir --}}
@endsection