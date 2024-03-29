<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderPaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $order_items;
    public $totalSum;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $order_items, $totalSum, $name)
    {
        $this->order = $order;
        $this->order_items = $order_items;
        $this->totalSum = $totalSum;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.order_payment_view')->subject('RECAPITULATIF D UN NOUVEL ACHAT');
    }
}
