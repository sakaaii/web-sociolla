@extends('layouts.master');
@section('title.detailpenjualan');
@section('content')
<div class="content wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Detail Transaksi</h3>
                        <a class="btn btn-primary" href="/detailpenjualan/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Penjualalan</th>
                                            <th scope="col">Produk</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Sub Total</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailpenjualan as $detailpenjualan )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$detailpenjualan->id_penjualan}}</td>
                                            <td>{{$detailpenjualan->id_produk}}</td>
                                            <td>{{$detailpenjualan->jumlah}}</td>
                                            <td>{{$detailpenjualan->sub_total}}</td>
                                            <td><a class="btn btn-danger" href="/detailpenjualan/{{$detailpenjualan->id}}/delete"
                                                    onclick="retrurn confirm('yakin mau dihapus?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <a class="btn btn-primary" href="/penjualan">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



@endsection

