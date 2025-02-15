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

    public function render()
    {
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

        // Update if email exists, otherwise create a new reservation
        $reservation = Reservation::updateOrCreate(
            ['email' => $validated['email']], // Search by email
            $validated // Update or insert these values
        );

        SendReservationConfirmationEmail::dispatch(
            $this->name,
            $this->email,
            $this->phone,
            now()
        );

        session()->flash('success', 'Reservation submitted successfully! A confirmation email has been sent.');
        $this->reset();
    }
}
