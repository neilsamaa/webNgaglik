@extends('layout/main')

@section('title', 'Arti Lambang Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <h1 class="fw-bold text-center">ARTI LAMBANG DESA</h1>
      <br>
      <h5>Simbol Kelurahan Ngaglik</h5>
      <div class="container" style="text-align: center">
      <figure class="figure">
        <img src="/img/lambang-desa.png" class="figure-img img-fluid rounded" alt="...">
        <figcaption class="figure-caption"><figure class="text-center">
          <blockquote class="blockquote">
            <p class="fst-italic">“Daringan Ngaglik”</p>
          </blockquote>
          <figcaption class="blockquote-footer">
            Slogan Kelurahan Ngaglik
          </figcaption>
        </figure></figcaption>
      </figure>
    </div>

    <p><b>GUNUNGAN BERWARNA KUNING :</b></p>
    <p>
      Gunungan adalah lambang semesta. Kuning, bermakna bahagia. Secara akademis ( psikologi ) makna warna kuning cenderung bijak dana
      cerdas. Sehingga gunungan berwarna memiliki makna kebahagiaan dalam kebijaksanaan dan kecerdasan yg dimiliki oleh insan DARINGAN
      NGAGLIK.
    </p>
    <p><b>MERAH dan BIRU :</b></p>
    <p>
      semacam lidah api, bisa diterjemahkan : Gairah untuk melaksanakan kegiatan dengan kebersamaan dan dalam kehangatan.
      Ditunjang warna biru yang menyatu adalah  pikiran jernih, percaya diri. Sehingga jika digabung memiliki makna Gairah melaksanakan
      kegiatan denga pikiran jerih dan percaya diri.
    </p>
    <p><b>Warna COKLAT :</b></p>
    <p>
      semacam pita di bawah.dan melingkar bak cahaya semesta, bisa saya terjemahkan : Unsur bumi ( air, api,angin, tanah) yang memikiki rasa kenyamanan.
    </p>
    <p><b>Warna ORANGE :</b></p>
    <p>
      yang kelihatan di balik pita bisa diartikan semangat membara.
    </p>
    <p><b>Warna DARINGAN, MAGENTA. memiliki makna :</b></p>
    <p>
      Keseimbangan emosional, keharmonisan, spiritual, dan intuitif.
    </p>

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