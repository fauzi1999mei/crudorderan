@extends('layout.template')
@section('judul','Customer')

{{-- sukses edit --}}
@if (session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. --}}
    {{ session('sukses') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif

{{-- isi --}}
{{-- tombol pilihan --}}
@section('data')
<center>
<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    Pilihan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/agent">Agent</a>
    <a class="dropdown-item" href="/user">Customer</a>
  </div>
</center>
<main role="main" class="container ">
    {{-- tombol tambah data --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Data Customer
    </button>
    {{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

    {{-- kita membuat sebuah tabel --}}

    <table class="table table-striped">
        <thead>
          <tr>
              {{-- tabel customer --}}
            <th scope="col">Id</th>
            <th scope="col">address</th>
            <th scope="col">kelurahan</th>
            <th scope="col">kecamatan</th>
            <th scope="col">kota</th>
            <th scope="col">Provinsi</th>
            <th scope="col">kode_pos</th>
            <th scope="col">latitude</th>
            <th scope="col">longitude</th>
            <th scope="col">no_rekening</th>
            <th scope="col">buku_rekening</th>
            <th scope="col">point</th>
            <th scope="col">default address</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <th scope="row">{{ $item -> id }}</th>
            <td>{{ $item-> address }}</td>
            <td>{{ $item-> kelurahan }}</td>
            <td>{{ $item-> kecamatan }}</td>
            <td>{{ $item-> kota }}</td>
            <td>{{ $item-> provinsi }}</td>
            <td>{{ $item-> kode_pos }}</td>
            <td>{{ $item-> latitude }}</td>
            <td>{{ $item-> longitude }}</td>
            <td>{{ $item-> no_rekening }}</td>
            <td>{{ $item-> buku_rekening }}</td>
            <td>{{ $item-> point }}</td>
            <td>{{ $item-> default_address }}</td>
            <td>
                <a href="/user/{{ $item->id }}">
                    <button class="btn-primary">EDIT</button>
                </a>
                <a href="/user/{{ $item->id }}/delete"
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
             {{$data->links()}}
          </li>
        </ul>
      </nav>

      {{-- table agent --}}
       {{-- tombol tambah data agent --}}
    </main>
@endsection

