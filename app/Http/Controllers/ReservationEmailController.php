<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\BulkReservationConfirmation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ReservationEmailController extends Controller
{
    public function sendBulk()
    {
        $reservations = Reservation::whereNotNull('email')->get();
        $sent = 0;
        $failed = [];

        foreach ($reservations as $reservation) {
            try {
                Mail::to($reservation->email)->send(
                    new BulkReservationConfirmation(
                        Str::title($reservation->name),
                        $reservation->email,
                    )
                );

                $sent++;
            } catch (\Exception $e) {
                $failed[] = $reservation->email;
                Log::error("Failed to send to {$reservation->email}: " . $e->getMessage());
            }
        }

        return response()->json([
            'message' => "Bulk email process completed.",
            'sent_count' => $sent,
            'failed_emails' => $failed
        ]);
    }
}
