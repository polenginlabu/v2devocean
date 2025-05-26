<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\BulkReservationConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ReservationEmailController extends Controller
{
    public function sendBulk(Request $request)
    {
        $page = $request->input('page', 1); // Default to page 1
        $perPage = $request->input('per_page', 50); // Default to 50 emails per page

        $skip = ($page - 1) * $perPage;

        $reservations = Reservation::whereNotNull('email')
            ->orderBy('id') // Ensures consistency
            ->skip($skip)
            ->take($perPage)
            ->get();

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
            'message' => "Bulk email process completed for page {$page}.",
            'sent_count' => $sent,
            'failed_emails' => $failed,
            'page' => $page,
            'per_page' => $perPage
        ]);
    }

}
