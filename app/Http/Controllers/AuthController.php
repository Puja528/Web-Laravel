<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Passing Data
    public function halo($nama){
        return "Halo, " . ucfirst($nama);
    }

    // Tampilkan form login
    public function showLogin(){
        return view('login');
    }

    // Proses login
    public function login(Request $request){
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Simulasi login sederhana (tanpa database)
        if($request->email === "admin@mail.com" && $request->password === "123456"){
            // Simpan session manual
            $request->session()->put('user', $request->email);
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ]);
    }

    // Dashboard
    public function dashboard(Request $request){
        $user = $request->session()->get('user');
        if(!$user){
            return redirect('/login');
        }
        return view('dashboard', compact('user'));
    }
}