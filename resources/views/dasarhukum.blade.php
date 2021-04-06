@extends('layout/main')

@section('title', 'Dasar Hukum')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">DASAR HUKUM</h1>
      <hr>
      <ol>
          <li>
            Undang-Undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2004, Nomor 125,
            Tambahan Lembaran Negara Nomor 4437) sebagaimana telah beberapa kali diubah terakhir dengan Undang-Undang Nomor 12 Tahun
            2008 (Lembaran Negara Republik Indonesia Tahun 2008, Nomor 59, Tambahan Lembaran Negara Republik Indonesia Nomor 4844);
          </li>
          <li>
            Peraturan Pemerintah Nomor 32 Tahun 1950 tentang Penetapan Mulai Berlakunya Undang-Undang 1950 Nomor 12, 13, 14 dan 15 Dari
            Hal Pembentukan Daerah-daerah Kabupaten di Jawa Timur/Tengah/Barat dan Daerah Istimewa Yogyakarta (Berita Negara tanggal
            14 Agustus 1950);
          </li>
          <li>
            Peraturan Pemerintahan Republik Indonesia Nomor 38 Tahun 2007 tentang Pembagian Urusan Pemerintahan Antara Pemerintah,
            Pemerintahan Daerah Provinsi, dan Pemerintahan Daerah Kabupaten/Kota (Lembaran Negara Republik Indonesia Tahun 2007
            Nomor 82, Tambahan Lembaran Negara Republik Indonesia Nomor 4737);
          </li>
          <li>
            Peraturan Pemerintah Nomor 41 Tahun 2007 tentang Organisasi Perangkat Daerah (Lembaran Negara Republik Indonesia Tahun 2007
            Nomor 89, Tambahan Lembaran Negara Republik Indonesia Nomor 4741);
          </li>
          <li>
            Peraturan Daerah Kabupaten Sleman Nomor 9 Tahun 2009 Tentang Organisasi Perangkat Daerah Pemerintah Kabupaten Sleman
          </li>
      </ol>

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