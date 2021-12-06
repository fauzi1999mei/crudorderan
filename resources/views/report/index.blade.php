@extends('layout.template')
@section('judul','Top Product')

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
                <th scope="col">product id</th>
                <th scope="col">product name</th>
                <th scope="col">item</th>
                <th scope="col">price </th>

                <th scope="col">qty/kuantitas</th>
                <th scope="col">count of product</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dataTopproduct as $item)
              <tr>
                <th scope="row">{{ $item-> product_id }}</th>
                <td>{{ $item-> product_name }}</td>

                <td>{{ $item-> item }}</td>
                <td>{{ $item-> price }}</td>
                <td>{{ $item-> qty }}</td>
                <td>{{ $item-> countproductid }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{-- batas tabel --}}
          {{-- buat pagr number --}}
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item ">
                 {{$dataTopproduct->links()}}
              </li>
            </ul>
          </nav>



          </main>

@endsection


