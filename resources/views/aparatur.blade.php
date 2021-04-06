@extends('layout/main')

@section('title', 'Aparatur Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4">
      <hr>
      <h1 class="text-center">APARATUR DESA</h1>
      <hr>
      {{-- BARIS LURAH --}}
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">LURAH NGAGLIK</h5>
            <img src="/img/aparatur/lurah.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Edwin Yogaspatra Harahap, S. STP</h5>
            </div>
          </div>
        </div>
      </div>

      <hr>
      {{-- BARIS SEKERTARIS --}}
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">SEKERTARIS LURAH</h5>
            <img src="/img/aparatur/sekertaris.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Reni Suharyati, SH.</h5>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF SEKERTARIS</h5>
            <img src="/img/aparatur/staff1.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Syahrul Aldi</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF SEKERTARIS</h5>
            <img src="/img/aparatur/staff2.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Arie Zulkarnain Muis</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF SEKERTARIS</h5>
            <img src="/img/aparatur/staff3.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">M. Jajak Setoyuwono</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF SEKERTARIS</h5>
            <img src="/img/aparatur/staff4.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Siti Aisiyah</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF SEKERTARIS</h5>
            <img src="/img/aparatur/staff5.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Praminto</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF SEKERTARIS</h5>
            <img src="/img/aparatur/staff6.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Era Farisa</h5>
            </div>
          </div>
        </div>
      </div>

      <hr>

      {{-- BARIS KASI. PEMERINTAHAN, KETENTRAMAN DAN KETERTIBAN --}}
      <div class="row row-cols-1 row-cols-md-2 g-3">
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">KASI. PEMERINTAHAN, KETENTRAMAN DAN KETERTIBAN</h5>
            <img src="/img/aparatur/kasi-pkk.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Windy Ardli Binnuri S, Kom.</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF KASI. PEMERINTAHAN, KETENTRAMAN DAN KETERTIBAN</h5>
            <img src="/img/aparatur/kasi-pkk-staff1.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Abdul Chamid, ST</h5>
            </div>
          </div>
        </div>
      </div>

      <hr>

      {{-- BARIS KASI. PEMBANGUNAN DAN KESRA --}}
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">KASI. PEMBANGUNAN DAN KESRA</h5>
            <img src="/img/aparatur/kasi-pdk.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Bambang Tri Evianto</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF KASI. PEMBANGUNAN DAN KESRA</h5>
            <img src="/img/aparatur/kasi-pdk-staff1.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Samsul Hadi</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF KASI. PEMBANGUNAN DAN KESRA</h5>
            <img src="/img/aparatur/kasi-pdk-staff2.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Erna Setyaningsih</h5>
            </div>
          </div>
        </div>
      </div>

      <hr>

      {{-- BARIS KASI. PEMBERDAYAAN DAN PEREKONOMIAN --}}
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">KASI. PEMBERDAYAAN DAN PEREKONOMIAN</h5>
            <img src="/img/aparatur/kasi-pdp.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Silly Novita, SE, MM</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF KASI. PEMBERDAYAAN DAN PEREKONOMIAN</h5>
            <img src="/img/aparatur/kasi-pdp-staff1.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Sandi Ari Yulian</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-80">
              <h5 class="card-header text-center">STAF KASI. PEMBERDAYAAN DAN PEREKONOMIAN</h5>
            <img src="/img/aparatur/kasi-pdp-staff2.jpg" class="card-img-top h-80" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Jaya Kasianto</h5>
            </div>
          </div>
        </div>
      </div>
      

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