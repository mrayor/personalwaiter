<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchesController extends Controller
{
    public function getSearch(Request $request) {
        $s = $request->query('s');

        // Query and paginate result
        $posts = Post::where('title', 'like', "%$s%")->orWhere('body', 'like', "%$s%")->paginate(2);
        return view('pages.search', ['posts' => $posts, 's' => $s ]);
    }
}
