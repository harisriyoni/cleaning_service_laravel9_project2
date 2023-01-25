<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.tambah_produk');
    }

    public function tambah(Request $request)
    {
        // return $request->file('image_produk')->store('store');
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi' => 'required',
            'image_produk' => 'image|file|max:5000',
        ]);
        if ($request->file('image_produk')) {
            $validateData['image_produk'] = $request->file('image_produk')->store('produk');
        }
        $validateData['user_id'] = auth()->user()->id;
        Produk::create($validateData);
        return redirect('/kelola_produk');
    }


    public function data()
    {
        $produk = Produk::get();
        return view('admin.kelola_produk', ['produk' => $produk]);
        // return $produk;
    }
    public function edit(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.edit', ['produk' => $produk]);
    }
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi' => 'required',
            'image_produk' => 'required|image|file|max:5000',
        ]);
        $produk = Produk::findOrFail($id);
        if ($request->file('image_produk')) {
            $validateData['image_produk'] = $request->file('image_produk')->store('produk');
            $produk->update($validateData);
            return redirect('/kelola_produk');
        }
    }
    public function delete($id)
    {
        $deleted = Produk::findOrFail($id);
        $deleted->delete();
        return redirect('/kelola_produk');

    }
}
