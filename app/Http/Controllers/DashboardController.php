<?php

namespace App\Http\Controllers;

use App\Traits\LoginCheckTrait;

class DashboardController extends Controller
{
    //
    // use LoginCheckTrait;
    
    public function index(){
        return view('admin.dashboard.index');
    }
}
