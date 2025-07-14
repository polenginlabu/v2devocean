<?php

namespace App\Jobs;

use App\Mail\ReservationConfirmation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class SendReservationConfirmationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $reservationDate;
    public $slug;

    /**
     * Create a new job instance.
     */
    public function __construct($name, $email, $phone, $reservationDate, $slug)
    {

        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->reservationDate = $reservationDate;
        $this->slug = $slug;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Mail::to($this->email)->send(
            new ReservationConfirmation(
                Str::title($this->name) ,
                $this->email,
                $this->phone,
                $this->reservationDate,
                $this->slug
            )
        );
    }
}
