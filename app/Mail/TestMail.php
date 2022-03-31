<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
        $this->data = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('legrand@legrand.com')
        //             ->subject('Mon objet personnalise')
        //             ->view('emails.test')
        //             ->attach(public_path(('img/laravel.png')));
        return $this->from('legrand@legrand.com')
                    ->subject('Mon objet personnalise')
                    ->view('emails.test')
                    ->attachFromStorage(('img/laravel.png'));
    }
}
