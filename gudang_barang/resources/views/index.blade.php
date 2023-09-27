@extends('master');

@section('title')
    Daftar Buku
@endsection

@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">id suplier</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_barang as $barang)
    <tr>
      <td>{{ $barang->id }}</td>
      <td>{{ $barang->nama_barang }}</td>
      <td>{{ "Rp ".number_format($barang->harga, 2,',', '.') }}</td>
      <td>{{ $barang->stok}}</td>
      <td>{{ $barang->id_suplier}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
