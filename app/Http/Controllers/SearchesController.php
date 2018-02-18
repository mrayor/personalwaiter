<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use App\Post;

class SearchesController extends Controller
{
    public function getSearch(Request $request) {
        $s = $request->query('s');

        // Query and paginate result
        $posts = Post::where('title', 'like', "%$s%")->orWhere('body', 'like', "%$s%")->paginate(2);
        $tags = Tag::all();
        $categories  = Category::all();
        return view('pages.search', ['posts' => $posts, 's' => $s ])->withCategories($categories)->withTags($tags);
    }
}
