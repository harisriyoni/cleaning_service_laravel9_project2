<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class adminController extends Controller
{
    public function lihathal()
    {
        $user = User::with('role')->get();
        return view('admin.data_pelanggan',['user'=>$user]);
    }
    public function admin()
    {
        $user = User::with('role')->where('id', auth()->user()->id)->get();
        return view('admin.admin',['user'=>$user]);
    }
}
