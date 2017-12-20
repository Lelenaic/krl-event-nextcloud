<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Ticket extends Mailable
{
    use Queueable, SerializesModels;

    private $_number;

    /**
     * Create a new message instance.
     *
     * @param $number
     */
    public function __construct($number)
    {
        $this->_number = $number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.registered')->with([
            'number' => $this->_number
        ])
            ->from('no-reply@mail.lenaic.me')
            ->subject('Inscription projection Nothing to Hide')
            ->replyTo('guillaume.cheramy@krementlibre.org');
    }
}
