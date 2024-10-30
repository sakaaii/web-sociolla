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
                        <h3> Tambah Detail Transaksi</h3>
                        <a class="btn btn-primary" href="/detailpenjualan">Kembali</a>
                        </div>
                         <div class="card-body">
                            <form action="/detailpenjualan/simpan" method="post">
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
                                                   <label class="form-label">Penjualan</label>
                                                   <input
                                                        type="text"
                                                        class="form-control"
                                                        name = "id_penjualan">

                                                   </div>
                                               </div>

                                               <div class="col-md-12">
                                                   <div class="input-group input-group-outline my-3">
                                                   <label class="form-label">Produk</label>
                                                   <input
                                                        type="text"
                                                        class="form-control"
                                                        name = "id_produk">
                                                   </div>
                                               </div>

                                               <div class="col-md-12">
                                                   <div class="input-group input-group-outline my-3">
                                                   <label class="form-label">Jumlah</label>
                                                   <input
                                                        type="text"
                                                        class="form-control"
                                                        name = "jumlah">
                                                   </div>
                                               </div>
                                               <div class="col-md-12">
                                                <div class="input-group input-group-outline my-3">
                                                <label class="form-label">Sub Total</label>
                                                <input
                                                     type="text"
                                                     class="form-control"
                                                     name = "sub_total">
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


{{-- <div class="mb-3">
                                    <label for="" class="from-label">Nama detailpenjualan</label>
                                    <input
                                        type="text"
                                        class="from-control"
                                        name="name"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                    <small id="helpId" class="from-text text-muted">Help Text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="from-label">Email</label>
                                    <input
                                        type="email"
                                        class="from-control"
                                        name="email"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                    <small id="helpId" class="from-text text-muted">Help Text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="from-label">Password</label>
                                    <input
                                        type="password"
                                        class="from-control"
                                        name="password"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                    <small id="helpId" class="from-text text-muted">Help Text</small>
                                </div> --}}
                                {{-- <button class="btn btn-primary" type="submit">Simpan</button> --}}
