@extends('layout/main')

@section('title', 'Wilayah Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">

      <hr>
      <h1 class="text-center">PROFIL WILAYAH DESA</h1>
      <hr>

      <h5>Peta Desa Ngaglik</h5>
      <p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31617.39158327026!2d112.49988478242655!3d-7.87686062586097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78872e19f2f877%3A0xb7808ff2ef50dab4!2sNgaglik%2C%20Kec.%20Batu%2C%20Kota%20Batu%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1617356244106!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </p>
      
      <br>
      <h5>Letak Geografis</h5>
      <p>
        Kelurahan Ngaglik merupakan salah satu dari empat kelurahan di Pemerintah Kota Batu dengan posisi Geografis terletak di ketinggian
        700 m di atas permukaan laut. Kelurahan Ngaglik terletak di daerah dataran tinggi dengan curah hujan 2500 m/th. Dengan suhu
        rata-rata harian 23°C. 
      </p>

      <br>
      <h5>Kewilayahan</h5>
      <p>
        Lingkungan di wilayah Kelurahan Ngaglik terdiri dari 15 RW dan terbagi menjadi 78 RT dengan kondisi jalan rata-rata sudah beraspal dengan luas ± 15 Ha.
      </p>

      <br>
      <h5>Batas Wilayah Kelurahan</h5>
      <p>
        <table class="table">
          <tbody>
            <tr>
              <td>UTARA</th>
              <td>Desa Sumberejo</td>
            </tr>
            <tr>
              <td>TIMUR</th>
              <td>Kelurahan Sisir</td>
            </tr>
            <tr>
              <td>SELATAN</th>
              <td>Kawasan Perhutani</td>
            </tr>
            <tr>
              <td>BARAT</th>
              <td>Desa Pesanggarahan</td>
            </tr>
          </tbody>
        </table>
      </p>

      <br>
      <h5>Luas Wilayah Kelurahan</h5>
      <p>
        <table class="table">
          <tbody>
            <tr>
              <td>Luas Wilayah Kelurahan</th>
              <td>287,2 Ha</td>
            </tr>
            <tr>
              <td>Perkebunan Swasta</th>
              <td>60 Ha</td>
            </tr>
            <tr>
              <td>Sawah dan Ladang</th>
              <td>55,4 Ha</td>
            </tr>
            <tr>
              <td>Pemukiman</th>
              <td>94,8 Ha</td>
            </tr>
            <tr>
              <td>Hutan Lindung</th>
              <td>56 Ha</td>
            </tr>
            <tr>
              <td>Bangunan Umum</th>
              <td>5 Ha</td>
            </tr>
            <tr>
              <td>Tanah Bengkok</th>
              <td>17,3 Ha</td>
            </tr>
            <tr>
              <td>Industri</th>
              <td>2 Ha</td>
            </tr>
            <tr>
              <td>Pertokoan / Perdagangan</th>
              <td>5 Ha</td>
            </tr>
          </tbody>
        </table>
      </p>

      <br>
      <h5>Orbitasi / Jarak Desa</h5>
      <p>
        <table class="table">
          <tbody>
            <tr>
              <td>Jarak ke Pemerintah Kota Batu</th>
              <td>700 m</td>
            </tr>
            <tr>
              <td>Jarak ke Kecamatan Batu</th>
              <td>1 km</td>
            </tr>
            <tr>
              <td>Jarak ke Kabupaten Malang</th>
              <td>23 km</td>
            </tr>
            <tr>
              <td>Jarak ke Provinsi</th>
              <td>123 km</td>
            </tr>
          </tbody>
        </table>
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