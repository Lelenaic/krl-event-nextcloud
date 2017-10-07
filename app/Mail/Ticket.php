<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Ticket extends Mailable
{
    use Queueable, SerializesModels;

    private $_stripeToken;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token=null)
    {
        $this->_stripeToken=$token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.registered')->with([
            'stripe' => $this->_stripeToken
        ])
        ->from('no-reply@lnc-services.fr')
        ->subject('Inscription Workshop Docker')
            ->replyTo('contact@krementlibre.org');
    }
}
