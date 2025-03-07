<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index( Request $request )
    {
        $validation = $request->validate([
            'form' => 'required',
            'to' => 'required',
            'journey' => 'required',
            'vehicle_type' => 'required',
            'vehicle' => 'required',
            'passengers' => 'required',
            'hotel' => 'required',
            'destination' => 'required',
            'pick_up_date' => 'required',
            'pick_up_time' => 'required',
            'passenger_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'remark' => 'required',
        ]);

        return view('booking.index',compact('data'));
    }
}
