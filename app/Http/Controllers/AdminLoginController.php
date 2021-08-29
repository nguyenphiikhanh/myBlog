<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function login()
    {
        return view('admin.login.login');
    }

    public function store(Request $request)
    {
        $checkInfoLogin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($checkInfoLogin)) {
            return redirect()->route('dashboard.index');
        } else {
            echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu')</script>";
            return view('admin.login.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
