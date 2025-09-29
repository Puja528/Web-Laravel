<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan form login
    public function index()
    {
        return view('login-form');
    }

    // Memproses form login
    public function login(Request $request)
    {
        // Validasi input password
        $request->validate([
            'username' => 'required',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/' // harus ada huruf kapital
            ],
        ]);

        $username = $request->username;
        $password = $request->password;

        // Ganti dengan NIM kamu
        $nim = "123456789";

        if ($username === $nim && $password === $nim) {
            return back()->with('success', 'Login berhasil!');
        } else {
            return back()->with('error', 'Username atau Password salah!');
        }
    }
}
