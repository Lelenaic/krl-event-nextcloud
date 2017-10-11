<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function prePay(Request $r)
    {
        if (!Ticket::canBuy()) {
            return redirect('/');
        }
        $r->validate([
            'name' => 'required',
            'payment' => 'required',
            'email' => 'required|email'
        ]);
        $ticket = new Ticket();
        $ticket->name = $r->name;
        $ticket->email = $r->email;
        $ticket->card = $r->payment == 1 ? true : false;
        if (!$ticket->card) {
            $ticket->valid = true;
        }
        $low = User::hasTheLowPrice($r->email) === false ? false : true;
        $ticket->reduced = $low;
        $ticket->save();
        if (!$ticket->card) {
            Mail::to($r->email)->send(new \App\Mail\Ticket());
            Mail::to('contact@krl.lnc.ovh')->send(new \App\Mail\AdminRegistered($ticket));
            return redirect()->route('check');
        } else {
            return redirect()->route('pay', ['id' => $ticket->id]);
        }
    }

    public function payForm($id)
    {
        if (!Ticket::canBuy()) {
            return redirect('/');
        }
        $ticket = Ticket::find($id);
        if (is_null($ticket)) return redirect('/');
        if ($ticket->valid) return redirect('/');
        if ($ticket->reduced) {
            return view('pay_reduced', compact('ticket'));
        } else {
            return view('pay', compact('ticket'));
        }
    }

    public function check()
    {
        return view('check');
    }

    public function card()
    {
        return view('card');
    }

    public function pay(Request $r, $id)
    {
        $ticket = Ticket::find($id);
        if (is_null($ticket) || $ticket->valid) return redirect('/');
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $token = $r->stripeToken;

        $customer = \Stripe\Customer::create(array(
            'email' => $ticket->email,
            'source' => $token
        ));
        $whichPrice = User::hasTheLowPrice($ticket->email);
        $price = $whichPrice ? 2500 : 3500;
        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount' => $price,
            'currency' => 'eur'
        ));
        $ticket->valid=true;
        $ticket->save();
        Mail::to($ticket->email)->send(new \App\Mail\Ticket($charge->id));
        Mail::to('contact@krl.lnc.ovh')->send(new \App\Mail\AdminRegistered($ticket,$charge->id));
        return redirect()->route('card');
    }
}
