@extends('layout/main')

@section('title', 'Tempat Wisata Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">TEMPAT WISATA DESA</h1>
      <hr>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tempat Wisata</th>
                <th scope="col">Alamat</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Map</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>MUSIUM ANGKUT</td>
                <td>Jl. Abdul Gani Atas RW 14</td>
                <td>Musium dan Pasar Apung</td>
                <td><a href="https://goo.gl/maps/jWyguykifMpK1GA77" target='_blank'>Klik</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>KUSUMA AGROWISATA</td>
                <td>Jl. Abdul Gani Atas RW 15</td>
                <td>wisata petik di kebun apel, jeruk, jambu merah, buah naga, strawberry dan sayur hidroponik bebas pestisida.
                  Selain wisata petik, kusuma agrowisata juga menawarkan wisata outbound dimana pengunjung dapat bermain 
                  War Game di arena airsoft gun, mengendarai ATV di mini off-road track atau bergelantungan dan meluncur dari 
                  menara Flying Fox.</td>
                <td><a href="https://goo.gl/maps/a6VhK7VV4UPcdEdC8" target='_blank'>Klik</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>

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