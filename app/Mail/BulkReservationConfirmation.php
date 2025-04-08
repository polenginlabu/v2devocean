<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BulkReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $phone;
    public string $reservation_date;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'John Paul & Elsheryn’s Wedding – Just 3 Days Away! 💛'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.bulk-reservation-confirmation',
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
