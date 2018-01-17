<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
use Session;

class PostsController extends Controller
{

    //Lock down posts controller

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //create variable and store all post
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        //return view and pass in variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::all();
        $tags = Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug', 
            'category_id' => 'required|integer',
            'body'        => 'required'
        ]);
        //store posts in table

        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        //save post in table
        $post->save();

        $post->tags()->sync($request->tags, false);

        //flash message
        Session::flash('success', 'The blog post was successfully saved!');

        return redirect()->route('posts.show', $post->id);

    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find post by id
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post ni database and save as var
        $post = Post::find($id);
        $categories = Category::all();
        $cats = [];

        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        $tags  = Tag::all();
        $tags2 = [];

        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }




        //return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the date
        $post = Post::find($id);
        if ($request->input('slug') == $post->slug ){
            $this->validate($request,[
                'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'body' => 'required'
            ]);

        } else {

        $this->validate($request,[
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body' => 'required'
        ]);
        }
        //save the data to the database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');
        $post->save();

        if (isset($request->tags)){
            $post->tags()->sync($request->tags); 
        } else {
            $post->tags()->sync([]);
        }
        //set flash data with success message
        Session::flash('success', 'This post was successfully updated.');
        //redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();

        $post->delete();

        Session::flash('success', 'The post was deleted successfully');

        return redirect()->route('posts.index');
    }
}
