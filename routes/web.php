<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jp-el-wedding', function () {
    return view('welcome');
});

Route::get('/preview-invitation', function () {
    return new App\Mail\ReservationConfirmation('John Paul', 'dYt5I@example.com', '1234567890', now());
});


Route::get('/wedding-invitation.ics', function () {
    $calendarContent = <<<EOD
    BEGIN:VCALENDAR
    PRODID:-//Google Inc//Google Calendar 70.9054//EN
    VERSION:2.0
    CALSCALE:GREGORIAN
    METHOD:REQUEST
    BEGIN:VTIMEZONE
    TZID:Asia/Manila
    X-LIC-LOCATION:Asia/Manila
    BEGIN:STANDARD
    TZOFFSETFROM:+0800
    TZOFFSETTO:+0800
    TZNAME:GMT+8
    DTSTART:20250411T070000Z
    END:STANDARD
    END:VTIMEZONE
    BEGIN:VEVENT
    DTSTART;TZID=Asia/Manila:20250411T070000Z
    DTEND;TZID=Asia/Manila:20250411T130000Z
    DTSTAMP:20241221T003301Z

    CREATED:20241220T230631Z
    DESCRIPTION:Join us to celebrate the wedding of JP & EL at The Pulo Events Place, Brgy. Ulat, Bayan ng Silang, Cavite.
        LOCATION:The Pulo Events Place, Brgy. Ulat, Bayan ng Silang, Cavite
    LAST-MODIFIED:20241221T003300Z
    URL:https://maps.app.goo.gl/JwZWoNSoNWxCUGvo7
    LOCATION:
    SEQUENCE:0
    STATUS:CONFIRMED
    SUMMARY:JP & EL Wedding Celebration
    TRANSP:OPAQUE
    END:VEVENT
    END:VCALENDAR
    EOD;

    return Response::make($calendarContent, 200, [
        'Content-Type' => 'text/calendar',
        'Content-Disposition' => 'attachment; filename="wedding-invitation.ics"'
    ]);
})->name('wedding.calendar');


Route::get('/redirect-to-maps', function () {
    return redirect()->away('https://maps.app.goo.gl/JwZWoNSoNWxCUGvo7');
});
