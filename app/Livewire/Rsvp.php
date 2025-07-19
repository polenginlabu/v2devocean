<?php

namespace App\Livewire;

use App\Jobs\SendReservationConfirmationEmail;
use App\Mail\ReservationConfirmation;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Rsvp extends Component
{
    public $name;
    public $email;
    public $phone;
    public $slug;
    public $imageUrl = "wedding/images/section-title2.png";
    public $contact2 = 'wedding/images/contact/2.png';
    public $contact1 = 'wedding/images/contact/1.png';

    public function render()
    {
         if($this->slug) {
            $this->imageUrl = '/wedding/rio-ansherina/section-title2.png';
            $this->contact2 = '/wedding/rio-ansherina/contact.png';
            $this->contact1 = '/wedding/rio-ansherina/contact1.png';
        }

        return view('livewire.rsvp');
    }

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
        ], [
            'email.unique' => 'This email is already associated with a reservation.',
        ]);

        $validated['reservation_date'] = now();
        if($this->slug) {
            $validated['slug'] = $this->slug;
            $this->imageUrl = '/wedding/rio-ansherina/section-title2.png';
        }

        // Update if email exists, otherwise create a new reservation
        $reservation = Reservation::updateOrCreate(
            ['email' => $validated['email']], // Search by email
            $validated // Update or insert these values
        );

        SendReservationConfirmationEmail::dispatch(
            $this->name,
            $this->email,
            $this->phone,
            now(),
            $this->slug
        );

        session()->flash('success', 'Reservation submitted successfully! A confirmation email has been sent.');
        $this->reset();
    }
}
