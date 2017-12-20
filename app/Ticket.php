<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    const MAX_TICKETS=50;

    public static function canBuy(){
        $places=Ticket::all()->count();
        return $places<Ticket::MAX_TICKETS;
    }

    public static function removeOldTickets(){
        $date = \Carbon\Carbon::now()->subMinutes(10);
        $tickets=Ticket::where('created_at', '<=', $date)->where('valid', 0)->get();
        foreach ($tickets as $ticket) {
            $ticket->delete();
        }
    }
}
