<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $_name;
    private $_email;
    private $_body;

    /**
     * Create a new message instance.
     *
     * @param String $name
     * @param String $email
     * @param String $body
     */
    public function __construct(String $name, String $email, String $body)
    {
        $this->_name = $name;
        $this->_email = $email;
        $this->_body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact')
            ->with([
                'body' => $this->_body
            ])->from($this->_email)
            ->subject('Contact depuis Workshop Docker')
            ->to('lenaic@lenaic.me');
    }
}
