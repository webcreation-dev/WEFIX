<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RepairQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteData, $failures;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quoteData, $failures)
    {
        $this->quoteData = $quoteData;
        $this->failures = $failures;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.repair_quote_view')->subject('NOUVELLE DEMANDE DE RENDEZ-VOUS');
    }
}
