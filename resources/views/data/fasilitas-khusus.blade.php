@extends('layout/main')

@section('title', 'Fasilitas Khusus Desa Ngaglik')

@section('container')

{{-- Body Awal --}}
  <div class="container p-4">
  <div class="row">
    {{-- Content Awal --}}
    <div class="col-md-8 border rounded pt-4" style="text-align: justify">
      <hr>
      <h1 class="text-center">FASILITAS KHUSUS</h1>
      <hr>

      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-hotel-tab" data-bs-toggle="tab" data-bs-target="#nav-hotel" type="button" role="tab" aria-controls="nav-hotel" aria-selected="true">...</button>
          <button class="nav-link" id="nav-olahraga-tab" data-bs-toggle="tab" data-bs-target="#nav-olahraga" type="button" role="tab" aria-controls="nav-olahraga" aria-selected="false">...</button>
          </div>
      </nav>
      {{-- TAB ... --}}
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-hotel" role="tabpanel" aria-labelledby="nav-hotel-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">...</th>
                <th scope="col">...</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>...</td>
                <td>...</td>
              </tr>
            </tbody>
          </table>
        </div>
        {{-- TAB ... --}}
        <div class="tab-pane fade" id="nav-olahraga" role="tabpanel" aria-labelledby="nav-olahraga-tab">
          <br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">...</th>
                <th scope="col">...</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>...</td>
                <td>...</td>
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