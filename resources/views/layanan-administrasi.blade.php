@extends('layout/main')

@section('title', 'Layanan Administrasi Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">LAYANAN ADMINISTRASI DESA</h1>
      <hr>
      
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3 justify-content-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-kk-tab" data-bs-toggle="pill" data-bs-target="#v-pills-kk" type="button" role="tab" aria-controls="v-pills-kk" aria-selected="true">Pengurusan KK</button>
          <button class="nav-link" id="v-pills-ktp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ktp" type="button" role="tab" aria-controls="v-pills-ktp" aria-selected="false">Pengurusan KTP</button>
          <button class="nav-link" id="v-pills-nikah-tab" data-bs-toggle="pill" data-bs-target="#v-pills-nikah" type="button" role="tab" aria-controls="v-pills-nikah" aria-selected="false">Pengurusan Nikah</button>
          <button class="nav-link" id="v-pills-pindah-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pindah" type="button" role="tab" aria-controls="v-pills-pindah" aria-selected="false">Surat Pindah Penduduk</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          
          <div class="tab-pane fade show active" id="v-pills-kk" role="tabpanel" aria-labelledby="v-pills-kk-tab">
          {{-- PENGURUSAN KK --}}
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Syarat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Surat Pengantar dari RT dan RW Setempat</td>
              </tr>
              <tr>
                <td>Fotokopi Kartu Keluarga yang lama</td>
              </tr>
              <tr>
                <td>Surat Pindah dari tempat lama apabila warga pendatang</td>
              </tr>
              <tr>
                <td>Mengisi blangko Kartu Keluarga dengan tertanda (tanda tangan) RT dan RW</td>
              </tr>
            </tbody>
          </table>
          </div>

          <div class="tab-pane fade" id="v-pills-ktp" role="tabpanel" aria-labelledby="v-pills-ktp-tab">
            {{-- PENGURUSAN KTP --}}
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Syarat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Surat Pengantar dari RT./RW. setempat</td>
              </tr>
              <tr>
                <td>Fotocopy Kartu Keluarga dengan Nomor Induk Kependudukan 357901 (KK baru)</td>
              </tr>
              <tr>
                <td>Foto 3×4, 2 lembar</td>
              </tr>
              <tr>
                <td>Mengisi Blangko KTP</td>
              </tr>
            </tbody>
          </table>
          </div>

          <div class="tab-pane fade" id="v-pills-nikah" role="tabpanel" aria-labelledby="v-pills-nikah-tab">
            {{-- PENGURUSAN NIKAH --}}
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Syarat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Surat Pengantar dari RT./RW. setempat</td>
              </tr>
              <tr>
                <td>Fotocopy KTP, 1 lembar</td>
              </tr>
              <tr>
                <td>Fotocopy KK, 1 lembar</td>
              </tr>
              <tr>
                <td>Fotocopy Ijazah/Akte kelahiran, 1 lembar</td>
              </tr>
              <tr>
                <td>Fotocopy TT 1 (Tidak untuk laki-laki)</td>
              </tr>
              <tr>
                <td>Foto Berwarna 3×3, 5 lembar</td>
              </tr>
              <tr>
                <td>Foto copy Surat Nikah Orang Tua</td>
              </tr>
              <tr>
                <td>Stopmap 1 lembar</td>
              </tr>
            </tbody>
          </table>
          </div>

          <div class="tab-pane fade" id="v-pills-pindah" role="tabpanel" aria-labelledby="v-pills-pindah-tab">
            {{-- PENGURUSAN PINDAH PENDUDUK --}}
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Syarat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Surat Pengantar dari RT./RW. setempat</td>
              </tr>
              <tr>
                <td>KTP Asli</td>
              </tr>
              <tr>
                <td>Kartu Keluarga (KK) Asli</td>
              </tr>
              <tr>
                <td>Untuk pindah lintas Kota/Kab./Propinsi melampirkan Surat Keterangan Catatan Kepolisian (SKCK).</td>
              </tr>
              <tr>
                <td>Dilengkapi Foto Berwarna 3×4, 4 Lembar ->u/ Desa</td>
              </tr>
              <tr>
                <td>Foto Berwarna 4×6 5 lembar -> untuk SKCK</td>
              </tr>
              <tr>
                <td>Foto berwarna 3×4 8 lembar untuk kepala keluarga -> Capil</td>
              </tr>
              <tr>
                <td>Foto berwarna 3×4 4 lembar untuk pengikut -> u/ Capil</td>
              </tr>
              <tr>
                <td>(Harap memberikan keterangan alamat lengkap tempat tujuan pindah)</td>
              </tr>
            </tbody>
          </table>
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