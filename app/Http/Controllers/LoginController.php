<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        // Validasi input
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Jika validasi gagal, kembalikan respons dengan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil kredensial dari permintaan
        $credentials = $request->only('email', 'password');

        // Ambil kredensial dari permintaan
        //  $credentials = $request->only('email', 'password');

        // Coba untuk mengotentikasi pengguna dengan kredensial yang diberikan
        // if (Auth::attempt($credentials)) {
        //     // Jika otentikasi berhasil, redirect ke halaman dashboard (atau halaman lain yang diinginkan)
        //     return redirect()->intended('admin/dashboard');
        // } else {
        //     // Jika otentikasi gagal, kembalikan respons dengan pesan kesalahan
        //     return redirect()->back()->withErrors(['error' => 'Unauthorized'])->withInput();
        // }

        // Coba untuk mengotentikasi pengguna dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, periksa peran pengguna
            $user = Auth::user();
            if ($user->role == 'admin') {
                // Redirect ke halaman admin
                return redirect()->intended('admin/dashboard');
            } else {
                // Redirect ke halaman user
                return redirect()->intended('/');
            }
        } else {
            // Jika otentikasi gagal, kembalikan respons dengan pesan kesalahan
            return redirect()->back()->withErrors(['error' => 'Unauthorized'])->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
