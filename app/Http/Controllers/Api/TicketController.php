<?php

namespace App\Http\Controllers\Api;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    const API_SECRET = 'IqjZrbFX2QaMqzgDtXfaHIM0aKbGUGzA';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->secret != static::API_SECRET) die('Invalid secret');
        $tickets = Ticket::select('id', 'name', 'validated')->get();
        return response()->json($tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $r
     * @return \Illuminate\Http\Response
     */
    public function validateTicket(Request $r)
    {
        $r->validate([
            'id' => 'nullable',
            'number' => 'nullable'
        ]);
        if ($r->id == null && $r->number != null) {
            $ticket = Ticket::where('number', $r->number)->first();
        } else {
            $ticket = Ticket::find($r->id);
        }
        if ($ticket != null) {
            if ($ticket->validated) {
                return response()->json(['success' => false, 'message' => 'Le ticket a déjà été validé !']);
            }
            $ticket->validated = true;
            $ticket->save();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Le ticket n\'existe pas !']);
        }
    }
}
