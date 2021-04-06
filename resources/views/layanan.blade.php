@extends('layout/main')

@section('title', 'Layanan Informasi Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <hr>
            <h1 class="text-center">LAYANAN INFORMASI DESA</h1>
            <hr>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-9">

            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terima kasih!</strong> Pesan anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <form name="request-form">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" required>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="telp" class="form-label">Nomor Telpon</label>
                <input type="tel" class="form-control" id="telp" aria-describedby="telp" name="telp" required>
              </div>

              <div class="mb-3">
              <label for="permintaan" class="form-label">Pilih Layanan</label>
              <select class="form-select" aria-label="permintaan" name="permintaan">
                <option selected value="Tidak dipilih">Pilih</option>
                <option>Surat Keterangan 1</option>
                <option>Surat Keterangan 2</option>
                <option>Surat Keterangan 3</option>
              </select>
              </div>

              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan" required></textarea>
              </div>
            
              <div class="text-center">
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
              </div>
            </form>
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