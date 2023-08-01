<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
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
    public function __construct($order_items, $totalSum, $order, $name)
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
        return $this->markdown('mail.order_mail_view')->subject('CONFIRMATION DE VOTRE PAIEMENT');
    }
}
