<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    const MAX_TICKETS=25;

    public static function canBuy(){
        $places=Ticket::all()->count();
        return $places<Ticket::MAX_TICKETS;
    }
}
