<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dang-nhap-quan-ly-noi-dung')->group(function(){
    Route::get('/',[
        'as' => 'admin_login',
        'uses' => 'AdminLoginController@login'
    ]);
    Route::post('/','AdminLoginController@store')->name('to_login');
});



Route::prefix('/dashboard')->group(function(){    //Admin Dashboard Route
    Route::get('/',[
        'as' => 'dashboard.index',
        'uses' => 'DashboardController@index'
    ]);
    
});

