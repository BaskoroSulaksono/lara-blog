<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

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
    return view('home',[
        "title" => "Home",
        "active" => 'home'
        ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home'
        ]);
});
Route::get('/about',function(){
    return view('about',[
        "title" => "About",
        "active" => 'about'
    ]);
});
Route::get('/posts',[PostController::class,'index']);
Route::get('/post/{post:slug}',[PostController::class,'post']);
Route::get('/category/{category:slug}',function (Category $category){
    return view('posts',[
        "title" => "Post By Categories : " . $category->name,
        "active" => 'posts',
        "data" => $category->post->load('category','user')
    ]);
});

Route::get('/author/{user:name}',function (User $user){
    return view('posts',[
        "title" => "Post By Author : " . $user->name,
        "active" => 'posts',
        "data" => $user->post->load('category','user')
    ]);
});