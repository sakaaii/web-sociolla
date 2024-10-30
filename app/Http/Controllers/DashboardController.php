<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\penjualan;
use App\Models\pelanggan;
use App\Models\detailpenjualan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalProduk = Produk::count();
        $totalPenjualan = Penjualan::sum('id');
        $totalPelanggan = Pelanggan::sum('id');
        $totalDetailPenjualan = DetailPenjualan::sum('id');

        // $dataBarangMasuk = BarangMasuk::with('Barang','Supplier')->get();
        // $dataBarangKeluar = BarangKeluar::with('Barang')->get();


        return view('home.dashboard', compact('totalProduk','totalPenjualan','totalPelanggan','totalDetailPenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
