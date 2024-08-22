<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    Public $username, $useremail, $usermessage; // ! $message è una variabile riservata
    // ! automaticamente disponibili sulla vista della mail
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $message)
    {
        $this->username = $name;
        $this->useremail = $email;
        $this->usermessage = $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope //busta  della lettera
    {
        return new Envelope(
            subject: 'Grazie di averci contattato',
            from: new Address('ristorante@noreply.com'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content //contenuto
    {
        return new Content(
            view: 'mail.contact-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
