<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{

    public function index()
    {
        $places = Ticket::MAX_TICKETS - Ticket::all()->count();
        $canBuy = Ticket::canBuy();
        return view('index', compact('places', 'canBuy'));
    }

    public function contact(Request $r)
    {
        $r->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required'
        ]);
        Mail::to('guillaume.cheramy@krementlibre.org')->send(new Contact($r->name, $r->email, $r->message));
        return redirect('/');
    }

    public function isMember(Request $r)
    {
        $r->validate([
            'email' => 'required|email'
        ]);
        $low = User::hasTheLowPrice($r->email);
        return $low === false ? 0 : $low;
    }
}
