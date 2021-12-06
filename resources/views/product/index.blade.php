@extends('layout.template')
@section('judul','Produk')

@if (session('sukses'))
{{-- part alert di bootstrap --}}
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. --}}
    {{ session('sukses') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif


{{-- isi --}}
@section('data')



  <main role="main" class="container ">
  {{-- tombol tambah data --}}
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Tambah Data Product
  </button>
  {{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

  {{-- kita membuat sebuah tabel --}}

  <table class="table table-striped">
      <thead>
        <tr>
            {{-- tabel product --}}
          <th scope="col">id</th>
          <th scope="col">product name</th>
          <th scope="col">category</th>
          <th scope="col">name</th>
          <th scope="col">status</th>
          <th scope="col">ordering</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataProduct as $item)
        <tr>
          <th scope="row">{{ $item-> id }}</th>
          <td>{{ $item-> product_name }}</td>
          <td>{{ $item-> category }}</td>
          <td>{{ $item-> name }}</td>
          <td>{{ $item-> status }}</td>
          <td>{{ $item-> ordering }}</td>
          <td>
              <a href="/product/{{ $item->id }}">
                  <button class="btn-primary">EDIT</button>
              </a>
              <a href="/product/{{ $item->id }}/delete"
                  onclick = "return confirm('apakah anda yakin want to delete this data ???')">
                  <button class="btn-danger">DELETE</button>
              </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{-- batas tabel --}}
    {{-- buat pagr number --}}
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item ">
           {{$dataProduct->links()}}
        </li>
      </ul>
    </nav>






  </main>
  @endsection




