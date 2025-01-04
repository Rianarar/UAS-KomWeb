<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Menampilkan form pendaftaran
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menangani pendaftaran pengguna
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Password harus ada dan dikonfirmasi
        ]);

        // Hash password sebelum disimpan
        $hashedPassword = Hash::make($request->password);

        // Simpan data pengguna
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman login setelah berhasil mendaftar
        return redirect('/login')->with('status', 'Akun berhasil dibuat. Silakan login.');
    }
}
