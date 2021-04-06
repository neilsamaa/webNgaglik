@extends('layout/main')

@section('title', 'Fasilitas Umum Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">FASILITAS UMUM</h1>
      <hr>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-rs-tab" data-bs-toggle="tab" data-bs-target="#nav-rs" type="button" role="tab" aria-controls="nav-rs" aria-selected="true">Rumah Sakit</button>
          <button class="nav-link" id="nav-olahraga-tab" data-bs-toggle="tab" data-bs-target="#nav-olahraga" type="button" role="tab" aria-controls="nav-olahraga" aria-selected="false">Sarana Olahraga</button>
          </div>
      </nav>
      {{-- TAB RUMAH SAKIT --}}
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-rs" role="tabpanel" aria-labelledby="nav-rs-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Rumah Sakit</th>
                <th scope="col">Alamat</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>RS. KARSA HUSADA</td>
                <td>Jl. A. Yani RT 07 RW 13</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>RS. HASTA BRATA</td>
                <td>Jl. Kartini RT 07 RW 13</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>RS. MARGI RAHAYU</td>
                <td>Jl. P. Sudirman RW 05</td>
                <td>RS Ibu dan Anak</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- TAB SARANA OLAHRAGA --}}
        <div class="tab-pane fade" id="nav-olahraga" role="tabpanel" aria-labelledby="nav-olahraga-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Sarana</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Lapangan Volley Texas</td>
                <td>Jl. Terusan Kasiman RW 05</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Lapangan Basket</td>
                <td>Jl. Abd Rahman RW 06</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Lapangan Sepak Bola</td>
                <td>Jl. Lesti Utara RW 03</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
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