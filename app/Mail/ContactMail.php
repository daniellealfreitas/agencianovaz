<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nova Mensagem de Contato',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'home', // View que criamos para o e-mail
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
