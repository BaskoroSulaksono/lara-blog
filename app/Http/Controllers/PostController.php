<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
class PostController extends Controller
{
    //
    public function index(){

        // $posts = Post::latest();

        // if(request('search')){
        //     $posts->where('title','like','%'. request('search') .'%')
        //     ->orWhere('body','like','%'.request('search').'%');
        // }

        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('name',request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts',[
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'data' => Post::latest()->filter(request(['search','category','author']))->paginate(3)->withQueryString()
        ]);
    }

    public function post(Post $post){
        return view('post',[
            'title' => 'Posts',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
