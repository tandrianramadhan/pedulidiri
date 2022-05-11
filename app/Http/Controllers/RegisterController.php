<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function simpanRegister(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:users,email',
            'name' => 'min:5|required',
        ], [
            'nik.unique' => 'NIK sudah terdaftar',
            'name.min' => 'Nama minimal 5 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->nik,
            // 'email' => $request->nik . '@gmail.com',
            'password' => bcrypt($request->nik)
        ];

        $createUser = User::create($data);

        if (!$createUser) {
            return redirect("/register")->with('failed', 'Akun tidak berhasil dibuat!');
        }

        return redirect("/")->with('success', 'Akun berhasil dibuat ! Silahkan login');
    }
}
