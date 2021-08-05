<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait LoginCheckTrait
{
    public function loginCheck()
    {
        if (!Auth::check()) {
            return view('admin.login.login');
        }
    }
}
