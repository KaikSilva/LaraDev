<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\User;
class WebController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at' , 'DESC')->limit(5)->get();
        $postsAll = Post::with('Users')->get();

        return view('front.blog' , [
            'posts' => $posts,
            'postsAll' => $postsAll,
        ]);
    }

    public function article($uri){
        $post = Post::where('uri' , $uri)->with('Users')->first();
        return view('front.article' , [
            'post' => $post,
        ]);
    }
}
