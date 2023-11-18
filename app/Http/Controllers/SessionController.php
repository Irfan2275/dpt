<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function index ()
    {
        return view('sesi.login');
    }
    
    public function login(Request $request)
{
    $errors = [];

    if (empty($request->input('email'))) {
        $errors['email'] = 'Email masih kosong. Harap isi email terlebih dahulu.';
    }

    if (empty($request->input('password'))) {
        $errors['password'] = 'Password masih kosong. Harap isi password terlebih dahulu.';
    }

    if (!empty($errors)) {
        return back()
            ->withErrors($errors)
            ->withInput($request->only('email', 'password'));
    }

    $request->validate([
        'email' => 'required|email:rfc,dns',
        'password' => 'required',
    ], [
        'email.required' => 'Email masih kosong.',
        'password.required' => 'Password masih kosong.',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika otentikasi berhasil, redirect ke halaman yang sesuai
        return redirect()->intended('/home');
    }

    return back()
    ->withErrors(['email' => 'Email atau password salah.'])
    ->withInput($request->only('email'))
    ->with('error', 'Email atau password salah. Harap periksa kembali.');
}

public function logout()
    {
        Auth::logout();
        return view('sesi.login');
    }

}
