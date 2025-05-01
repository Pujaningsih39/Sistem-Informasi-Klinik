<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        // Jika sudah login, langsung ke halaman home
        if (Auth::check()) {
            return redirect()->route('v_home');
        }

        // Tampilkan halaman login
        return view('login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            //Session::put('login', 'Berhasil Login');
            return redirect('home');
        } else {
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/');
        }
        // // Validasi input
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // // Ambil data email & password
        // $credentials = $request->only('email', 'password');

        // // Coba login
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate(); // prevent session fixation
        //     return redirect()->intended('home');
        // }

        // // Jika gagal
        // return back()->with('error', 'Email atau Password salah');
    }

    public function actionlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
