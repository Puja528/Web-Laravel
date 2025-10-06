<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/',
            ],
        ], [
            'password.min'   => 'Password minimal 3 karakter',
            'password.regex' => 'Password harus mengandung huruf kapital',
        ]);

        $nim = "Puja1234678";

        if ($request->username === $nim && $request->password === $nim) {
            return redirect('/auth')->with('success', 'Login berhasil!');
        } else {
            return redirect('/auth')->with('error', 'Username atau Password salah!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username'); // hapus session username
        return redirect('/login')->with('success', 'Anda telah logout.');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi dasar
        $request->validate([
            'nama' => ['required', 'regex:/^[A-Za-z\s]+$/'], // hanya huruf & spasi
            'alamat' => 'required|string|max:300',
            'tgl_lahir' => 'required|date',
            'username' => 'required|string|min:3',
            'password' => ['required', 'min:6', 'regex:/^(?=.*[A-Z])(?=.*\d).+$/'], // wajib ada huruf kapital & angka
            'confirm_password' => 'required|string|min:6'
        ]);

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()
                ->withInput() // agar form tidak kosong lagi
                ->with('error', 'Confirm Password tidak sesuai');
        }

        return redirect()->route('auth.index')->with('success', 'Registrasi berhasil! Silahkan Login.');
    }
}
