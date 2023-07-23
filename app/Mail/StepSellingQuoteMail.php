<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StepSellingQuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $step_selling_quote, $last_name, $first_name , $model;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($step_selling_quote, $last_name, $first_name , $model)
    {
        $this->step_selling_quote = $step_selling_quote;
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->model = $model;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.step_selling_quote_view')->subject('NOUVELLE SOUMISSION DE REVENTE');
    }
}
