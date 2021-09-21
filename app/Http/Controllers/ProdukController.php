<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::get();
        // return $produk;
        return view('Welcome', compact('produk'));
    }

    public function create()
    {
        return view('Create');
    }

    public function store(Request $request)
    {
        $nama_produk = $request->nama_produk;
        $keterangan = $request->keterangan;
        $harga = $request->harga;
        $jumlah = $request->jumlah;

        $data = new Produk();
        $data->nama_produk = $nama_produk;
        $data->keterangan = $keterangan;
        $data->harga = $harga;
        $data->jumlah = $jumlah;
        $data->save();

        return redirect()->action([ProdukController::class, 'index']);
    }

    public function delete($id)
    {
        Produk::where('id', $id)->delete();
        return redirect()->action([ProdukController::class, 'index']);
    }

    public function formUpdate(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->get();
        return view('Update', compact('produk'));
    }

    public function update(Request $request, $id)
    {

        Produk::where('id', $id)->update([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect()->action([ProdukController::class, 'index']);
    }
}
