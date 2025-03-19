<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $title = 'Booking List';
        $bookings = Booking::all();
        return view('admin.booking.index'
            ,['bookings' => $bookings]
            ,['title' => $title]
        );
    }
}
