@extends('layouts.master');
@section('title.penjualan');
@section('content')
<div class="content wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Tambah Data penjualan</h3>
                        <a class="btn btn-primary" href="/penjualan">Kembali</a>
                        </div>
                         <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
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
                                                <label class="form-label">User</label>
                                                {{-- <input
                                                     type="text"
                                                     class="form-control"
                                                     name = "kasir"> --}}
                                                     <select name="user" id="" class="form-control">
                                                        @foreach($user as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>

                                                        @endforeach
                                                       </select>
                                                </div>
                                            </div>

                                               <div class="col-md-12">
                                                   <div class="input-group input-group-outline my-3">
                                                   <label class="form-label">Tanggal Penjualan</label>
                                                   <input
                                                        type="date"
                                                        class="form-control"
                                                        name = "tanggal_penjualan">
                                                   </div>
                                               </div>

                                               <div class="col-md-12">
                                                <div class="input-group input-group-outline my-3">
                                                <label class="form-label">Total Harga</label>
                                                <input
                                                     type="text"
                                                     class="form-control"
                                                     name = "total_harga">
                                                </div>
                                            </div>

                                               <div class="col-md-12">
                                                   <div class="input-group input-group-outline my-3">
                                                   <label class="form-label">Pelanggan</label>
                                                   {{-- <input
                                                        type="text"
                                                        class="form-control"
                                                        name = "pelanggan"> --}}
                                                        <select name="id_pelanggan" id="" class="form-control">
                                                            @foreach($pelanggan as $pelanggan)
                                                            <option value="{{$pelanggan->id}}">{{$pelanggan->nama_pelanggan}}</option>

                                                            @endforeach
                                                           </select>
                                                   </div>
                                               </div>
                             </form>

                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                                   </div>



                                 </div>
                               </div>
                             </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
