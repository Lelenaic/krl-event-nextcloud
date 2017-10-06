<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function contact(Request $r)
    {
        $r->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required'
        ]);
        dd(Mail::to('lenaic@lenaic.me')->send(new Contact($r->name, $r->email, $r->message)));
        die;
        return redirect('/');
    }
}
