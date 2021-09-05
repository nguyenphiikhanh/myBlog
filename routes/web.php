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

Route::prefix('/dang-nhap-quan-ly-noi-dung')->group(function () {
    Route::get('/', [
        'as' => 'admin.login',
        'uses' => 'AdminLoginController@login'
    ])->middleware('checkUser');
    Route::post('/', 'AdminLoginController@store')->name('to_login'); //login

    Route::get('/logout', [ //logout
        'as' => 'admin.logout',
        'uses' => 'AdminLoginController@logout'
    ]);
});

Route::prefix('/admin')->group(function () {    //Admin Dashboard

    Route::get('/', [
        'as' => 'dashboard.index',
        'uses' => 'DashboardController@index'
    ])->middleware('checkLogin');


    Route::prefix('/danh-muc-bai-viet')->group(function () { // category
        Route::get('/', [
            'as' => 'category.index',
            'uses' => 'CategoryPostController@index'
        ])->middleware('checkLogin');

        Route::get('/create', [
            'as' => 'category.create',
            'uses' => 'CategoryPostController@create'
        ])->middleware('checkLogin');

        Route::post('/store', [
            'as' => 'category.store',
            'uses' => 'CategoryPostController@store'
        ])->middleware('checkLogin');

        Route::get('/sua-danh-muc-PK_M{id}', [
            'as' => 'category.edit',
            'uses' => 'CategoryPostController@edit'
        ])->middleware('checkLogin');

        Route::post('/sua-danh-muc-PK_M{id}', [
            'as' => 'category.update',
            'uses' => 'CategoryPostController@update'
        ])->middleware('checkLogin');

        Route::get('/delete/danh-muc-PK_M{id}', [
            'as' => 'category.delete',
            'uses' => 'CategoryPostController@destroy'
        ])->middleware('checkLogin');

    });

    Route::get('/them-tags', [   // tags
        'as' => 'tags.create',
        'uses' => 'TagController@create'
    ])->middleware('checkLogin');

    Route::get('/tags-edit-T{id}G', [   // tags
        'as' => 'tags.edit',
        'uses' => 'TagController@edit'
    ])->middleware('checkLogin');

    Route::post('/tags-update-T{id}G', [   // tags
        'as' => 'tags.update',
        'uses' => 'TagController@update'
    ])->middleware('checkLogin');

    Route::post('/them-tags', [   // tags
        'as' => 'tags.store',
        'uses' => 'TagController@store'
    ])->middleware('checkLogin');

    Route::get('/tags', [
        'as' => 'tags.index',
        'uses' => 'TagController@index'
    ])->middleware('checkLogin');

    Route::get('/tags-delete-T{id}G', [   // tags
        'as' => 'tags.delete',
        'uses' => 'TagController@destroy'
    ])->middleware('checkLogin');

    Route::get('/them-bai-viet-moi', [  //post
        'as' => 'posts.create',
        'uses' => 'PostController@create'
    ])->middleware('checkLogin');

    Route::get('/sua-bai-viet-P{id}T', [
        'as' => 'posts.edit',
        'uses' => 'PostController@edit'
    ])->middleware('checkLogin');

    Route::post('/sua-bai-viet-P{id}T', [
        'as' => 'posts.update',
        'uses' => 'PostController@update'
    ])->middleware('checkLogin');

    Route::get('/xoa-bai-viet-P{id}T', [
        'as' => 'posts.delete',
        'uses' => 'PostController@destroy'
    ])->middleware('checkLogin');

    
    Route::post('/them-bai-viet-moi', [
        'as' => 'posts.store',
        'uses' => 'PostController@store'
    ])->middleware('checkLogin');

    Route::get('/danh-sach-bai-viet', [
        'as' => 'posts.index',
        'uses' => 'PostController@index'
    ])->middleware('checkLogin');

    Route::get('/sua-thong-tin-U0{id}ER', [  // user
        'as' => 'user.edit',
        'uses' => 'UserController@edit'
    ])->middleware('checkLogin');

    Route::post('/sua-thong-tin-U0{id}ER', [  // user
        'as' => 'user.update',
        'uses' => 'UserController@update'
    ])->middleware('checkLogin');

});

 // in blog
Route::get('/', 'BlogController@index')->name('page.index');

Route::get('/{slug}', [
    'as' => 'post.show',
    'uses' => 'PostController@show'
]);