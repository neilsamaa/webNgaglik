@extends('layout/main')

@section('title', 'Struktur Organisasi Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">STRUKTUR ORGANISASI</h1>
      <hr>
      <br>
      <figure class="figure">
        <img src="/img/struktur-organisasi.jpg" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="figure-caption">Struktur Organisasi Pemerintahan Kelurahan Ngaglik</figcaption>
      </figure>

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