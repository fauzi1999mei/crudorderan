@extends('layout.template')
@section('judul','Top Customer')

{{-- @endsection --}}
{{-- buat part --}}
@section('data')

    {{-- <h1>List Produk Paling Banyak Terjual</h1>
    <center>

    </center>
    <h1>List Top Customer</h1>
    <h1>List Top Agent</h1> --}}

    <center>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Pilihan
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/laporan">Top Produk</a>
            <a class="dropdown-item" href="/Topcustomer">Top Customer</a>
            <a class="dropdown-item" href="/Topagent">Top Agent</a>

          </div>

        </center>

        {{-- kita membuat sebuah tabel top produk --}}

        <table class="table table-striped">
            <thead>
              <tr>
                  {{-- tabel agent --}}
                <th scope="col"> id</th>
                <th scope="col">customer id</th>
                <th scope="col"> Name</th>
                <th scope="col">agent id</th>
                <th scope="col">agent name</th>
                <th scope="col">price</th>
                <th scope="col">qty</th>
                <th scope="col">number</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dataTopcustomer as $item)
              <tr>
                <th scope="row">{{ $item-> id }}</th>
                <td>{{ $item-> customer_id }}</td>
                <td>{{ $item-> name }}</td>
                <td>{{ $item-> agent_id }}</td>
                <td>{{ $item-> agent_name }}</td>
                <td>{{ $item-> price }}</td>
                <td>{{ $item-> qty }}</td>
                <td>{{ $item-> number }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{-- batas tabel --}}
          {{-- buat pagr number --}}
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item ">
                 {{$dataTopcustomer->links()}}
              </li>
            </ul>
          </nav>



          </main>

@endsection


