<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function register(Request $r)
    {
        if (!Ticket::canBuy()) {
            return redirect('/');
        }
        $r->validate([
            'email' => 'required|email',
            'name' => 'nullable',
            'anonymous' => 'nullable'
        ]);
        $ticket = new Ticket();
        if ($r->anonymous!=1){
            $ticket->name = $r->name;
            $ticket->email = $r->email;
        }
        $ticket->number = bin2hex(random_bytes(24));
        $ticket->save();
        Mail::to($r->email)->send(new \App\Mail\Ticket($ticket->number));
        Mail::to('contact@krl.lnc.ovh')->send(new \App\Mail\AdminRegistered($ticket));
        return redirect()->route('done');
    }

    public function done()
    {
        return view('done');
    }
}
