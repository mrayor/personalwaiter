<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactRequest;


class ContactsController extends Controller
{
    public function show(){
        return view('pages.contact');
    }
    public function mail(ContactFormRequest $request)
	{     
	
		
		Mail::to('info@personalwaiter.com.ng')->send(new ContactRequest($request));
	//	return view('pages.contact');
		//send the admin an notification
		//$admin->notify(new InboxMessage($message));
		// redirect the user back
		return back()->with('status', 'Thanks for the message! We will get back to you soon!');
	}



}
