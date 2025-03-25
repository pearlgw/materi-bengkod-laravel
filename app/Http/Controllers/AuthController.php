<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        try {
            $existingUser = User::where('email', $validatedData['email'])->first();
            if ($existingUser) {
                toastr()->error('Email sudah terdaftar! Silakan gunakan email lain.');
                return redirect()->back()->withInput();
            }

            $user = User::create([
                'nama' => $validatedData['nama'],
                'alamat' => $validatedData['alamat'],
                'no_hp' => $validatedData['no_hp'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'role' => 'pasien',
            ]);

            toastr()->success('Registrasi berhasil! Silakan login.');
            return redirect()->route('login');

        } catch (\Exception $e) {
            toastr()->error('Terjadi kesalahan saat melakukan registrasi. Silakan coba lagi.');
            return redirect()->back()->withInput();
        }
    }

    public function login(Request $request){
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        try {
            if (Auth::attempt($credentials)) {
                // Jika login berhasil
                $request->session()->regenerate();

                $user = Auth::user();
                if ($user->role === 'dokter') {
                    toastr()->success('Selamat datang, ' . $user->nama . '!');
                    return redirect()->route('dokter.dashboard');
                } elseif ($user->role === 'pasien') {
                    toastr()->success('Selamat datang, ' . $user->nama . '!');
                    return redirect()->route('pasien.dashboard');
                } else {
                    return redirect()->route('');
                }
            }

            toastr()->error('Email atau password salah! Silakan coba lagi.');
            return redirect()->back()->withInput();

        } catch (\Exception $e) {
            toastr()->error('Terjadi kesalahan saat melakukan login. Silakan coba lagi.');
            return redirect()->back()->withInput();
        }
    }
    public function logout(Request $request)
    {
        try {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            toastr()->success('Anda berhasil logout.');

            return redirect()->route('login');
        } catch (\Exception $e) {
            toastr()->error('Terjadi kesalahan saat melakukan logout. Silakan coba lagi.');
            return redirect()->back();
        }
    }
}
