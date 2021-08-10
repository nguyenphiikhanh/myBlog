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

Route::prefix('/dang-nhap-quan-ly-noi-dung')->group(function () {
    Route::get('/', [
        'as' => 'admin_login',
        'uses' => 'AdminLoginController@login'
    ]);
    Route::post('/', 'AdminLoginController@store')->name('to_login');
});



Route::prefix('/admin')->group(function () {    //Admin Dashboard
    Route::get('/', [
        'as' => 'dashboard.index',
        'uses' => 'DashboardController@index'
    ]);


    Route::prefix('/danh-muc-bai-viet')->group(function () { // category
        Route::get('/', [
            'as' => 'category.index',
            'uses' => 'CategoryPostController@index'
        ]);

        Route::get('/create', [
            'as' => 'category.create',
            'uses' => 'CategoryPostController@create'
        ]);

        Route::post('/store', [
            'as' => 'category.store',
            'uses' => 'CategoryPostController@store'
        ]);

        Route::get('/edit/danh-muc-PK_M{id}', [
            'as' => 'category.edit',
            'uses' => 'CategoryPostController@edit'
        ]);

        Route::post('/update/danh-muc-PK_M{id}', [
            'as' => 'category.update',
            'uses' => 'CategoryPostController@update'
        ]);

        // delete danh muc lam sau khi xong module post
    });

    Route::get('/them-tags', [   // tags
        'as' => 'tags.create',
        'uses' => 'TagController@create'
    ]);

    Route::get('/tags-edit-T{id}G', [   // tags
        'as' => 'tags.edit',
        'uses' => 'TagController@edit'
    ]);

    Route::post('/tags-update-T{id}G', [   // tags
        'as' => 'tags.update',
        'uses' => 'TagController@update'
    ]);

    Route::post('/them-tags', [   // tags
        'as' => 'tags.store',
        'uses' => 'TagController@store'
    ]);

    Route::get('/tags', [
        'as' => 'tags.index',
        'uses' => 'TagController@index'
    ]);

    Route::get('/them-bai-viet-moi', [  //post
        'as' => 'posts.create',
        'uses' => 'PostController@create'
    ]);

    Route::get('/sua-bai-viet-P{id}T', [
        'as' => 'posts.edit',
        'uses' => 'PostController@edit'
    ]);

    Route::post('/sua-bai-viet-P{id}T', [
        'as' => 'posts.update',
        'uses' => 'PostController@update'
    ]);

    Route::get('/xoa-bai-viet-P{id}T', [
        'as' => 'posts.delete',
        'uses' => 'PostController@destroy'
    ]);

    
    Route::post('/them-bai-viet-moi', [
        'as' => 'posts.store',
        'uses' => 'PostController@store'
    ]);

    Route::get('/danh-sach-bai-viet', [
        'as' => 'posts.index',
        'uses' => 'PostController@index'
    ]);

});
