@extends('layout/main')

@section('title', 'Visi dan Misi Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">VISI & MISI</h1>
      <hr>
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/9kpHLkXzAxU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
      <br>
      <br>
      <h5 class="text-center">VISI</h5>
      <p class="text-center">Terwujudnya Kelurahan Ngaglik yang tumbuh berkembang dengan Semangat gotong royong, dan cita-cita tinggi menuju masyarakat
        makmur dengan daya dukung sinergis antara pemerintah dan masyarakat.</p>
      <h5 class="text-center">MISI</h5>
      <ol>
        <li>Bhinneka Tunggal Ika sebagai dasar menciptakan lingkungan yang damai,sehat dan sejahtera.</li>
        <li>Pelayanan publik secara optimal dalam melayani masyarakat.</li>
        <li>Mewujudkan manajemen pemerintahan dengan prinsip “GOOD GOVERNMENT”.</li>
        <li>Mendorong dan mendukung masyarakat untuk aktif, kreatif, inovatif dalam membentuk usaha kecil menengah yang berbasis ekonomi kerakyatan.</li>
        <li>Meningkatkan peran serta masyarakat dalam pembangunan.</li>
        <li>Mendukung program pemerintah yang berpedoman pada kemakmuran masyarakat kelurahan Ngaglik.</li>
        <li>Meningkatkan potensi di bidang pariwisata yang berwawasan lingkungan guna meningkatkan taraf hidup dan kesejahteraan masyarakat.</li>
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