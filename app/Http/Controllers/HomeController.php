<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('simple-home');
    }

    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'  => 'required|max:10',
            'email' => ['required','email'],
            'password' => [
                'required',           // wajib diisi
                'string',             // harus berupa string
                'min:8',              // minimal 8 karakter
                'regex:/[a-z]/',      // harus ada huruf kecil
                'regex:/[A-Z]/',      // harus ada huruf besar
                'regex:/[0-9]/',      // harus ada angka
            ],
        ]);

        // Jika validasi lolos → data diproses
        $pageData['name']     = $request->name;
        $pageData['email']    = $request->email;
        $pageData['password'] = $request->password;

        return view('signup-success', $pageData);
    }

    public function redirectTo($tujuan)
    {
        if ($tujuan === 'login') {
            // Redirect ke halaman Auth (misal: /login)
            return redirect('/auth');
        }
        elseif ($tujuan === 'belanja') {
            // Redirect ke halaman e-commerce (misal: link eksternal)
            return redirect('https://www.tokopedia.com/');
        }
        else {
            // Jika parameter tidak dikenali, kembalikan ke halaman utama
            return redirect('/');
        }
    }
}