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
    private $_number;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket, $number=null)
    {
        $this->_ticket=$ticket;
        $this->_number=$number;
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
            'number' => $this->_number
        ])->from('no-reply@mail.lenaic.me')
            ->subject('Inscription Workshop Docker');
    }
}
