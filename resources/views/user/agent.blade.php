@extends('layout.template')
@section('judul','Agent')


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

  {{-- @section('data') --}}
  <main role="main" class="container ">
  {{-- tombol tambah data --}}
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Agent
</button>
{{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

{{-- kita membuat sebuah tabel --}}

<table class="table table-striped">
    <thead>
      <tr>
          {{-- tabel agent --}}
        <th scope="col">id</th>
        <th scope="col">Store Name</th>
        <th scope="col">partner id</th>
        <th scope="col">pin lock</th>
        <th scope="col">store open</th>
        <th scope="col">store close</th>
        <th scope="col">address</th>
        <th scope="col">kelurahan</th>
        <th scope="col">kecamatan</th>
        <th scope="col">kota</th>
        <th scope="col">provinsi</th>
        <th scope="col">kode pos</th>
        <th scope="col">latitude</th>
        <th scope="col">longitude</th>
        <th scope="col">ktp</th>
        <th scope="col">KK</th>
        <th scope="col">NPWP</th>
        <th scope="col">NOmor Rekenign</th>
        <th scope="col">buku rekening</th>
        <th scope="col">point</th>
        <th scope="col">credit Limit</th>
        <th scope="col">subscription</th>
        <th scope="col">max load</th>
        <th scope="col">default agent</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataAgent as $item)
      <tr>
        <th scope="row">{{ $item-> id }}</th>
        <td>{{ $item-> store_name }}</td>
        <td>{{ $item-> partner_id }}</td>
        <td>{{ $item-> pin_lock }}</td>
        <td>{{ $item-> store_open }}</td>
        <td>{{ $item-> store_close }}</td>
        <td>{{ $item-> address }}</td>
        <td>{{ $item-> kelurahan }}</td>
        <td>{{ $item-> kecamatan }}</td>
        <td>{{ $item-> kota }}</td>
        <td>{{ $item-> provinsi }}</td>
        <td>{{ $item-> kode_pos }}</td>
        <td>{{ $item-> latitude }}</td>
        <td>{{ $item-> longitude }}</td>
        <td>{{ $item-> ktp }}</td>
        <td>{{ $item-> kk }}</td>
        <td>{{ $item-> npwp }}</td>
        <td>{{ $item-> no_rekening }}</td>
        <td>{{ $item-> buku_rekening }}</td>
        <td>{{ $item-> point }}</td>
        <td>{{ $item-> crdeit_limit }}</td>
        <td>{{ $item-> subscription }}</td>
        <td>{{ $item-> max_load }}</td>
        <td>{{ $item-> default_agent }}</td>
        <td>
            <a href="/agent/{{ $item->id }}">
                <button class="btn-primary">EDIT</button>
            </a>
            <a href="/agent/{{ $item->id }}/delete"
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
         {{$dataAgent->links()}}
      </li>
    </ul>
  </nav>



  </main>
  @endsection



