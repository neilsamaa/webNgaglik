@extends('layout/main')

@section('title', 'Data Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">DATA DESA</h1>
      <hr>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-usia-tab" data-bs-toggle="tab" data-bs-target="#nav-usia" type="button" role="tab" aria-controls="nav-usia" aria-selected="true">Usia</button>
          <button class="nav-link" id="nav-agama-tab" data-bs-toggle="tab" data-bs-target="#nav-agama" type="button" role="tab" aria-controls="nav-agama" aria-selected="false">Agama</button>
          <button class="nav-link" id="nav-profesi-tab" data-bs-toggle="tab" data-bs-target="#nav-profesi" type="button" role="tab" aria-controls="nav-profesi" aria-selected="false">Profesi</button>
          <button class="nav-link" id="nav-pendidikan-tab" data-bs-toggle="tab" data-bs-target="#nav-pendidikan" type="button" role="tab" aria-controls="nav-pendidikan" aria-selected="false">Pendidikan</button>
          <button class="nav-link" id="nav-rtrw-tab" data-bs-toggle="tab" data-bs-target="#nav-rtrw" type="button" role="tab" aria-controls="nav-rtrw" aria-selected="false">RT/RW</button>
        </div>
      </nav>
      {{-- TAB USIA --}}
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-usia" role="tabpanel" aria-labelledby="nav-usia-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Usia</th>
                <th scope="col">Laki-Laki</th>
                <th scope="col">Perempuan</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>0 - 4</td>
                <td>45</td>
                <td>56</td>
                <td>101</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>5 - 9</td>
                <td>310</td>
                <td>278</td>
                <td>586</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>10 - 14</td>
                <td>366</td>
                <td>358</td>
                <td>724</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- TAB AGAMA --}}
        <div class="tab-pane fade" id="nav-agama" role="tabpanel" aria-labelledby="nav-agama-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Agama</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Islam</td>
                <td>10.858</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Katholik</td>
                <td>959</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Kristen</td>
                <td>1.186</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- TAB PROFESI --}}
        <div class="tab-pane fade" id="nav-profesi" role="tabpanel" aria-labelledby="nav-profesi-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Mata Pecaharian</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Belum / Tidak Bekerja</td>
                <td>3.050</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mengurus Rumah Tangga</td>
                <td>2.353</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Pelajar / Mahasiswa</td>
                <td>2.205</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- TAB PENDIDIKAN --}}
        <div class="tab-pane fade" id="nav-pendidikan" role="tabpanel" aria-labelledby="nav-pendidikan-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Tidak / Belum Sekolah</td>
                <td>1.924</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Belum Tamat SD / Sederajat</td>
                <td>1.363</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Tamat SD / Sederajat</td>
                <td>1.888</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- TAB RT/RW --}}
        <div class="tab-pane fade" id="nav-rtrw" role="tabpanel" aria-labelledby="nav-rtrw-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">RW</th>
                <th scope="col">Ketua</th>
                <th scope="col">RT</th>
                <th scope="col">Ketua</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" rowspan="6">1</th>
                <td rowspan="6">RW 1</td>
                <td rowspan="6">Andri</td>
              </tr>
              <tr>
                <td>RT 1</td>
                <td>Slamet Sugiono</td>
              </tr>
              <tr>
                <td>RT 2</td>
                <td>Hari Sahono</td>
              </tr>
              <tr>
                <td>RT 3</td>
                <td>Herini</td>
              </tr>
              <tr>
                <td>RT 4</td>
                <td>Suliono</td>
              </tr>
              <tr>
                <td>RT 5</td>
                <td>Wiwit Hariono</td>
              </tr>

              <tr>
                <th scope="row" rowspan="6">2</th>
                <td rowspan="6">RW 2</td>
                <td rowspan="6">Fadjar Wahono</td>
              </tr>
              <tr>
                <td>RT 1</td>
                <td>Agus Trianto</td>
              </tr>
              <tr>
                <td>RT 2</td>
                <td>Muhammad Bani Adam</td>
              </tr>
              <tr>
                <td>RT 3</td>
                <td>Agus Salim</td>
              </tr>
              <tr>
                <td>RT 4</td>
                <td>Anwar Rosihan</td>
              </tr>
              <tr>
                <td>RT 5</td>
                <td>Hengki Porwanto</td>
              </tr>

              <tr>
                <th scope="row" rowspan="9">3</th>
                <td rowspan="9">RW 3</td>
                <td rowspan="9">...</td>
              </tr>
              <tr>
                <td>RT 1</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 2</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 3</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 4</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 5</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 6</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 7</td>
                <td>...</td>
              </tr>
              <tr>
                <td>RT 8</td>
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