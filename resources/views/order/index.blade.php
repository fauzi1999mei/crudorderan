@extends('layout.template')
@section('judul','Order')



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
{{-- @section('data') --}}


{{-- <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    Pilihan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="">Agent</a>
    <a class="dropdown-item" href="">Customer</a>
  </div> --}}

  @section('data')
  <main role="main" class="container ">
  {{-- tombol tambah data --}}
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Tambah Data Order
  </button>
  {{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

  {{-- kita membuat sebuah tabel --}}

  <table class="table table-striped">
      <thead>
        <tr>
            {{-- tabel product --}}
          <th scope="col">id</th>
          <th scope="col">customer id</th>
          <th scope="col">name</th>
          <th scope="col">agent id</th>
          <th scope="col">agent_name</th>
          <th scope="col">price</th>
          <th scope="col">qty </th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataOrder as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item-> customer_id }}</td>
          <td>{{ $item-> name }}</td>
          <td>{{ $item-> agent_id }}</td>
          <td>{{ $item-> agent_name }}</td>
          <td>{{ $item-> price }}</td>
          <td>{{ $item-> qty }}</td>
          <td>
              <a href="/order/{{ $item->id }}">
                  <button class="btn-primary">EDIT</button>
              </a>
              <a href="/order/{{ $item->id }}/delete"
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
           {{$dataOrder->links()}}
        </li>
      </ul>
    </nav>






  </main>
  @endsection



