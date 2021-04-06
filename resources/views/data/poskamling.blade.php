@extends('layout/main')

@section('title', 'Poskamling Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">POSKAMLING DESA</h1>
      <hr>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Poskamling</th>
                <th scope="col">Lokasi RT / RW</th>
                <th scope="col">Koordinat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>POS KAMLING I</td>
                <td>RW 1</td>
                <td>-7.8816020021618405, 112.51931403719192</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>POS KAMLING II</td>
                <td>RW 2</td>
                <td>-7.881389709919844, 112.51877540050242</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>POS KAMLING III</td>
                <td>RW 3</td>
                <td>-7.8810759680884885, 112.51965732325107</td>
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