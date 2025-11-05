<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // pastikan model User sudah ada
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 🟢 Tampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // 🟢 Proses login
    public function login(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('nik', $request->nik)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['loginError' => 'NIK atau password salah!'])->withInput();
    }

    // 🟢 Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // 🟢 Tampilkan halaman registrasi
    public function showRegisterForm()
    {
        return view('auth.registrasi');
    }

    // 🟢 Proses registrasi user baru
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20|unique:users,nik',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->nik = $request->nik;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
