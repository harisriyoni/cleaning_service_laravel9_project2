<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Status;

class kelola_order_Controller extends Controller
{
    public function kelorder()
    {
        $order = Order::get();
        return view('admin.lihat_order',['order'=>$order]);
    }
    public function confirm($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Diterima';
        $order->save();
        return redirect('/kelola_order');
    }
    public function reject($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Ditolak';
        $order->save();
        return redirect('/kelola_order');
    }
    public function pending($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'Menunggu';
        $order->save();
        return redirect('/kelola_order');
    }
    public function deleteorder($id)
    {
        $deleted = Order::findOrFail($id);
        $deleted->delete();
        return redirect('/kelola_produk');
    }
}
