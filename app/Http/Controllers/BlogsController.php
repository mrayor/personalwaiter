<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogsController extends Controller
{
    public function single($slug) {
    //fetch database based on slug
    $post = Post::where('slug', '=', $slug)->first();

    // return the view and pass in the post object 
    return view('blog.single')->withPost($post);
    }
}
