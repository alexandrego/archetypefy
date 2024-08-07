<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SecuryCode extends Mailable
{
    use Queueable, SerializesModels;

    public $userName; // Variável para o nome
    public $confirmCode; // Variável para o código

    /**
     * Create a new message instance.
     */
    public function __construct($userName, $confirmCode)
    {
        //
        $this->userName = $userName; // Atribui o nome
        $this->confirmCode = $confirmCode; // Atribui o código
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        return new Envelope(
            subject: 'Archetypefy - Código de verificação',
            from: 'suporte@archetypefy.online',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'layouts.mail.mail',
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
