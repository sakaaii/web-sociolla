<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\User;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = penjualan::all();
        return view('home.penjualan.index',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $pelanggan = Pelanggan::all();
        return view('home.penjualan.tambah', compact('user','pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        penjualan::create([
            'id_user' => $request->user,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'total_harga' => $request->total_harga,
            'id_pelanggan' => $request->id_pelanggan,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = penjualan::find($id);
        return view('home.penjualan.edit', compact('penjualan'));
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
        $penjualan = penjualan::find($id);
        $penjualan->update([
            'id_user' => $request->user,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'total_harga' => $request->total_harga,
            'id_pelanggan' => $request->id_pelanggan,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
}
