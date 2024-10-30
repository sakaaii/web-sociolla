@extends('layouts.master');
@section('title.user');
@section('content')
<div class="content wrapper">
    <section class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Edit Data User</h3>
                        <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="post">
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
                                                       <label class="form-label">Name</label>
                                                       <input
                                                            type="text"
                                                            class="form-control"
                                                            name = "name"
                                                            value="{{ $user->name}}">
                                                       </div>
                                                   </div>

                                                   <div class="col-md-12">
                                                       <div class="input-group input-group-outline my-3">
                                                       <label class="form-label">Email</label>
                                                       <input
                                                            type="email"
                                                            class="form-control"
                                                            name = "email"
                                                            value="{{ $user->email}}">
                                                       </div>
                                                   </div>

                                                   <div class="col-md-12">
                                                       <div class="input-group input-group-outline my-3">
                                                       <label class="form-label">Password</label>
                                                       <input
                                                            type="password"
                                                            class="form-control"
                                                            name = "password"
                                                            value="{{ $user->password}}">
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



{{-- <div class="mb-3">
                                    <label for="" class="from-label">Nama User</label>
                                    <input
                                        type="text"
                                        class="from-control"
                                        name="name"
                                        value="{{ $user->name}}"
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
                                        value="{{ $user->email}}"
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
                                        value="{{ $user->password}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                    <small id="helpId" class="from-text text-muted">Help Text</small> --}}
