<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){

        $user = Order::where('users_id', auth()->user()->id)->get();
        return view('order.order',['user'=>$user]);
        //  $order = Order::with(['status'])->get();
        // return view('admin.lihat_order',['order'=>$order]);

    }
    public function nambah(){
        $produk = Produk::get();
                return view('order.addorder',['produk'=>  $produk]);

    }
    public function makanan(Request $request)
    {
        $validateData = $request->validate([
            'paket' => 'required',
            'alamat_tujuan' => 'required',
            'tanggal' =>'required',
            'harga' =>'required',
            'pilih_pembayaran' =>'required',
            'deskripsi_order' =>'required',
            'image' =>'image|file|max:5000',
        ]);
        // return dd($request);
    //  return dd($validateData);
        if ($request->file('image')){
            $validateData['image'] = $request->file('image')->store('order');
        $validateData['users_id'] = auth()->user()->id;
        Order::create($validateData);
        return redirect('/order');
        }
    }
}

// // return $request->file('image_produk')->store('store');
// $validateData = $request->validate([
//     'nama_produk' => 'required',
//     'harga_produk' => 'required',
//     'deskripsi' => 'required',
//     'image_produk' => 'image|file|max:5000',
// ]);
// if ($request->file('image_produk')) {
//     $validateData['image_produk'] = $request->file('image_produk')->store('produk');
// }
// $validateData['user_id'] = auth()->user()->id;
// Produk::create($validateData);
// return redirect('/kelola_produk');
