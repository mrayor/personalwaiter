<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function blog(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.blog')->withPosts($posts);
    }

   /* public function single(){
        return view('blog.single');
    }   */

    public function career(){
        return view('pages.career');
    }

}
