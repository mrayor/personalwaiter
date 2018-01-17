<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

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

    public function show(){
        return view('pages.contact');
    }

    public function mail(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        ];

        Mail::send('emails.new-contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('support@personalwaiter.com.ng');
            $message->subject('New Contact Request');
        });

       Session::flash('success', 'Thank you for contacting us, We will be in touch as soon as possible.');
       return redirect()->route('pages.contact');
         
    }

}
