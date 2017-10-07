<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function prePay(Request $r)
    {
        if (!Ticket::canBuy()){
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
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://paiement.krementlibre.org/isMember.php?email=' . urlencode($r->email));
        $ticket->reduced = (bool)$res->getBody();
        $ticket->save();
        if (!$ticket->card) {
            Mail::to($r->email)->send(new \App\Mail\Ticket());
            return view('check');
        }else{
            return view('pay', ['id'=>$ticket->id]);
        }
    }

    public function payForm($id){
        if (!Ticket::canBuy()){
            return redirect('/');
        }
        $ticket=Ticket::find($id);
        if ($ticket->valid){
            return redirect('/');
        }
        return view('pay', compact('ticket'));
    }
}
