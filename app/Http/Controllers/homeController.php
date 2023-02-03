<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class homeController extends Controller
{
    public function card(){
        $produk = Produk::get();
        return view('home',['produk'=>  $produk]);
    }
}
