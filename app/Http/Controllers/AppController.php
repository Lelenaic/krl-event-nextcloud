<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    const MAX_TICKETS=25;

    public function index(){
        $places=static::MAX_TICKETS-Ticket::all()->count();
        return view('index', compact('places'));
    }

    public function contact(Request $r)
    {
        $r->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required'
        ]);
        Mail::to('lenaic@lenaic.me')->send(new Contact($r->name, $r->email, $r->message));
        return redirect('/');
    }
}
