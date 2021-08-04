<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //
    public function login(){
        return view('admin.login.login');
    }

    public function store(Request $request){
        dd($request);
    }
}
