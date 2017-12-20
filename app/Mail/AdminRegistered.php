<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminRegistered extends Mailable
{
    use Queueable, SerializesModels;

    private $_ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->_ticket=$ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.adminRegistered')->with([
            'ticket' => $this->_ticket,
        ])->from('no-reply@mail.lenaic.me')
            ->subject('Inscription Workshop Docker');
    }
}
