@extends('layouts.master');
@section('title.pelanggan');
@section('content')
<div class="content wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Edit Data Pelanggan</h3>
                        <a class="btn btn-primary" href="/pelanggan">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                                @csrf
                                    <div class="container-fluid">
                                        <div class="card my-4">
                                           <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                             <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                               <h6 class="text-white text-capitalize ps-3">Tambah Data</h6>
                                             </div>
                                           </div>
                                           <div class="card-body px-0 pb-2">
                                             <div class="container">
                                               <form action="#" method="post">
                                               <div class="row">

                                                   <div class="col-md-12">
                                                       <div class="input-group input-group-outline my-3">
                                                       <label class="form-label">Nama Pelanggan</label>
                                                       <input
                                                            type="text"
                                                            class="form-control"
                                                            name = "nama_pelanggan"
                                                            value="{{ $pelanggan->nama_pelanggan}}">
                                                       </div>
                                                   </div>

                                                   <div class="col-md-12">
                                                       <div class="input-group input-group-outline my-3">
                                                       <label class="form-label">Alamat</label>
                                                       <input
                                                            type="text"
                                                            class="form-control"
                                                            name = "alamat"
                                                            value="{{ $pelanggan->alamat}}">
                                                       </div>
                                                   </div>

                                                   <div class="col-md-12">
                                                       <div class="input-group input-group-outline my-3">
                                                       <label class="form-label">No Telp</label>
                                                       <input
                                                            type="text"
                                                            class="form-control"
                                                            name = "no_telp"
                                                            value="{{ $pelanggan->no_telp}}">
                                                       </div>
                                                       <button class="btn btn-primary" type="submit">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
