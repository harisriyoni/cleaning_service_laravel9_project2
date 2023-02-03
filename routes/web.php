<?php

use App\Http\Controllers\adminController;
use Dflydev\DotAccessData\Data;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\datauserController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kelola_order_Controller;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//user
route::get('/home',[homeController::class,'card']);
route::get('/',[homeController::class,'card']);
//order-info
route::get('/order',[orderController::class,'index'])->middleware('auth');
route::get('/order/detail/{id}',[orderController::class,'cetak'])->middleware('auth');

route::get('/addorder',[orderController::class,'nambah'])->middleware('auth');
route::post('/addorder/store',[orderController::class,'makanan'])->middleware('auth');

// register
route::get('/register',[UserController::class,'index']);
route::post('/register/store',[UserController::class,'store']);

//login
route::get('/login',[UserController::class,'yeye'])->name('login')->middleware('guest');
route::post('/login',[UserController::class,'authenticate'])->middleware('guest');
route::get('/logout',[UserController::class,'logout'])->middleware('auth');

//lihat
route::get('/users',[datauserController::class,'data'])->middleware('auth');

//edit
route::get('/profil/edit/{id}',[UserController::class,'viewnya'])->middleware('auth');
route::put('/profil/edit/{id}',[UserController::class,'ubah'])->middleware('auth');

//dashboard
route::get('/tambah_produk',[ProdukController::class,'index'])->middleware(['auth','admin']);
route::post('/tambah_produk',[ProdukController::class,'tambah'])->middleware(['auth','admin']);

//kelola edit + delete
route::get('/kelola_produk',[ProdukController::class,'data'])->middleware(['auth','admin']);
route::get('/kelola_produk/edit/{id}',[ProdukController::class,'edit'])->middleware(['auth','admin']);
route::put('/kelola_produk/edit/{id}',[ProdukController::class,'update'])->middleware(['auth','admin']);

//delete
route::get('/kelola_produk/delete/{id}',[ProdukController::class,'delete'])->middleware(['auth','admin']);

//admin-lihat
route::get('/admin',[adminController::class,'admin'])->middleware(['auth','admin']);
//kelola order
route::get('/kelola_order',[kelola_order_Controller::class,'kelorder'])->middleware(['auth','admin']);
route::get('kelola_order/delete/{id}',[kelola_order_Controller::class,'deleteorder'])->middleware(['auth','admin']);
route::get('/data_pelanggan',[adminController::class,'lihathal'])->middleware(['auth','admin']);

//status
route::post('/order/confirm/{id}',[kelola_order_Controller::class,'confirm'])->middleware(['auth','admin']);
route::post('/order/reject/{id}',[kelola_order_Controller::class,'reject'])->middleware(['auth','admin']);
route::post('/order/pending/{id}',[kelola_order_Controller::class,'pending'])->middleware(['auth','admin']);







