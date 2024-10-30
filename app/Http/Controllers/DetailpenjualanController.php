<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Http\Request;



class DetailpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $detailpenjualan = DetailPenjualan::all();
        return view('home.detailpenjualan.index',compact('detailpenjualan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.detailpenjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        detailpenjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'sub_total' => $request->sub_total,

        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $detaipenjualan = Detailpenjualan::find($id);
        $detaipenjualan->delete();
        return redirect()->back();
    }
}
