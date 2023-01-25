<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class datauserController extends Controller
{
    public function data(){
        $user = User::with('role')->where('id', auth()->user()->id)->get();
        return view('user.profil',['user'=>$user]);
    }

}
