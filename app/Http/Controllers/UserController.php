<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use session;

class UserController extends Controller
{
    //register
    public function index()
    {
        return view('user.register');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'role_id' => 'required',
            'nama_lengkap' => 'required', 'min:3', 'max:255',
            'username' => 'required', 'min:3', 'max:255',
            'email' => 'required|email:dns|unique:pelanggan',
            'password' => 'required|min:4|max:255',
            'no_hp' => 'required', 'min:3', 'max:255',
            'no_ktp' => 'required', 'min:3', 'max:255',
            'alamat' => 'required', 'min:3', 'max:255',
            'email' => 'required', 'min:3', 'max:255',
            'tanggal_lahir' => 'required', 'min:3', 'max:255',
        ]);
        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        // dd($validate);
        return redirect('/login')->with(['status' => 'Login Berhasil Silahkan Loginkan Akun Mu!!']);
        // return view('pelanggan.register');
    }
    //login
    public function yeye()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return redirect('/login');
        }

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function viewnya()
    {
        $user = User::where('id', auth()->user()->id)->get();
        return view('user.update',['user'=>$user]);
    }
    public function ubah(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        $user = User::findOrFail($id);
        $user->update($validateData);
return redirect('/users');    }
}
