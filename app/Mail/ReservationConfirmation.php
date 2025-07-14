<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $reservation_date;
    public $slug;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $phone, $reservation_date, $slug)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->reservation_date = $reservation_date;
        $this->slug = $slug;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'You’re Invited to Our Wedding Celebration!'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $logo = 'https://devocean.website/wedding/logo.png';
        $logoAlt = 'JP & EL Wedding Logo';

        if ($this->slug) {
            $logo = 'https://devocean.website/wedding/' . $this->slug . '/wedding-logo.png';
            $logoAlt = $this->slug. 'Wedding Logo';
        }

        return new Content(
            markdown: 'emails.ar-reservation-confirmation',
            with: [
                'slug' => $this->slug,
                'logo' => $logo,
                'logoAlt' => $logoAlt
            ],
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
