@extends('layout/main')

@section('title', 'Fasilitas Sosial Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">FASILITAS SOSIAL</h1>
      <hr>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-pdformal-tab" data-bs-toggle="tab" data-bs-target="#nav-pdformal" type="button" role="tab" aria-controls="nav-pdformal" aria-selected="true">Pendidikan Formal</button>
          <button class="nav-link" id="nav-pdnonformal-tab" data-bs-toggle="tab" data-bs-target="#nav-pdnonformal" type="button" role="tab" aria-controls="nav-pdnonformal" aria-selected="false">Pendidikan Non Formal</button>
          <button class="nav-link" id="nav-pdpesantren-tab" data-bs-toggle="tab" data-bs-target="#nav-pdpesantren" type="button" role="tab" aria-controls="nav-pdpesantren" aria-selected="false">Pondok Pesantren/TPQ</button>
          <button class="nav-link" id="nav-tmptibadah-tab" data-bs-toggle="tab" data-bs-target="#nav-tmptibadah" type="button" role="tab" aria-controls="nav-tmptibadah" aria-selected="false">Tempat Ibadah</button>
        </div>
      </nav>
      {{-- TAB PENDIDIKAN FORMAL --}}
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-pdformal" role="tabpanel" aria-labelledby="nav-pdformal-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Sarana Pendidikan</th>
                <th scope="col">Pengasuh / Kepala Sekolah</th>
                <th scope="col">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>TK Sang Timur</td>
                <td></td>
                <td>Jl. Kasiman RW 05</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>TK PGRI 01</td>
                <td></td>
                <td>Jl. Abdul Rahman RW 08</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>TK PGRI 02</td>
                <td></td>
                <td>Jl. Terusan Kasiman RW 05</td>
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
        {{-- TAB PENDIDIKAN NON FORMAL --}}
        <div class="tab-pane fade" id="nav-pdnonformal" role="tabpanel" aria-labelledby="nav-pdnonformal-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lembaga</th>
                <th scope="col">Kepala Sekolah</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Play Group Griya Melati</td>
                <td></td>
                <td>Jl. Panglima Sudirman RW 02</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Play Group Cempaka</td>
                <td></td>
                <td>Jl. Darsono Barat RW 10</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Play Group Nurul Qolbi</td>
                <td></td>
                <td>Jl. Darsono RW 11</td>
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
        {{-- TAB PONDOK PESANTRE/TPQ --}}
        <div class="tab-pane fade" id="nav-pdpesantren" role="tabpanel" aria-labelledby="nav-pdpesantren-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Ponpes/TPQ</th>
                <th scope="col">Pengasuh</th>
                <th scope="col">Lokasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>TPQ Al Fajar</td>
                <td></td>
                <td>RW 02</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>TPQ Al Ikhlas</td>
                <td></td>
                <td>RW 10</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>TPQ Abu Bakar Asy Syidiq</td>
                <td></td>
                <td>RW 11</td>
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
        {{-- TAB TEMPAT IBADAH --}}
        <div class="tab-pane fade" id="nav-tmptibadah" role="tabpanel" aria-labelledby="nav-tmptibadah-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tempat Ibadah</th>
                <th scope="col">Takmir / Pengelola</th>
                <th scope="col">Lokasi / RT / RW</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Langgar Darussalam</td>
                <td>H. Effendi</td>
                <td>Jl. Brantas RT 01 RW 01</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Langgar An Namiroh</td>
                <td>Mohammad Hassan</td>
                <td>Jl. Brantas Gg 1 RT 02 RW 10</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Langgar Al Husna</td>
                <td>Yamin</td>
                <td>Jl. Brantas Kampung Sakinah RT 05 RW 01</td>
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