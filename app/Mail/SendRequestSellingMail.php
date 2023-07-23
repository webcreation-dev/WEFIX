<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendRequestSellingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quoteData)
    {
        $this->quoteData = $quoteData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.send_request_selling_view')->subject('Confirmation de votre rendez-vous');
    }
}
