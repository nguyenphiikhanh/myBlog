<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Traits\LoginCheckTrait;
use App\User;

class DashboardController extends Controller
{
    //
    // use LoginCheckTrait;
    
    public function index(){
        $posts = Post::all();
        $categories = Category::all();
        $users = User::all();
        $view = 0;
        foreach($posts as $post){
            $view += $post->view_count;
        }
        return view('admin.dashboard.index',compact('posts','categories','users','view'));
    }

    public function iconShow(){
        return view('admin.dashboard.icon');
    }
}
