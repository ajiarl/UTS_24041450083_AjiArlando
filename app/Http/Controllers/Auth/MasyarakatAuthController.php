<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasyarakatAuthController extends Controller
{
    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return redirect()->route('kecamatan.home');
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|numeric|digits:16|unique:users,nik',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'required|string|max:20',
            'kelurahan' => 'required|in:Alang-Alang Lebar,Karya Baru,Talang Kelapa,Srijaya',
            'alamat' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nik' => $validated['nik'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'telepon' => $validated['telepon'],
            'kelurahan' => $validated['kelurahan'],
            'alamat' => $validated['alamat'],
            'role' => 'masyarakat',
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('kecamatan.home')->with('success_aspirasi', 'Selamat datang! Akun warga Anda berhasil didaftarkan.');
    }

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('kecamatan.home');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'nik';

        if (Auth::attempt([$fieldType => $request->login, 'password' => $request->password], $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('kecamatan.home'));
        }

        return back()->withErrors([
            'login' => 'NIK/Email atau kata sandi yang Anda masukkan tidak sesuai.',
        ])->onlyInput('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('kecamatan.home');
    }
}
