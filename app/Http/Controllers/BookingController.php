<?php

namespace App\Http\Controllers;


use App\Mail\EmailController;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{

    public function index()
    {
        return view('booking.index');
    }

    public function store( Request $request )
    {
        // dd($request->all());
        Booking::create([
            'from' => $request->from,
            'to' => $request->to,
            'journy' => $request->journy,
            'vehicle_type' => $request->vehicle_type,
            'vehicle' => $request->vehicle,
            'passengers' => $request->passengers,
            'hotel' => $request->hotel,
            'destination' => $request->destination,
            'pick_up_date' => $request->pick_up_date,
            'pick_up_time' => $request->pick_up_time,
            'passenger_name' => $request->passenger_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'remark' => $request->remark,
            'date' => Carbon::now()->setTimezone('Asia/Bangkok')->format('Y-m-d H:i:s'),
        ]);


        $bookingData = [
            'from' => $request->from,
            'to' => $request->to,
            'journy' => $request->journy,
            'vehicle_type' => $request->vehicle_type,
            'vehicle' => $request->vehicle,
            'passengers' => $request->passengers,
            'hotel' => $request->hotel,
            'destination' => $request->destination,
            'pick_up_date' => $request->pick_up_date,
            'pick_up_time' => $request->pick_up_time,
            'passenger_name' => $request->passenger_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'remark' => $request->remark,
            'date' => Carbon::now()->setTimezone('Asia/Bangkok')->format('Y-m-d H:i:s'),
        ];

        // dd($bookingData['date']);

        // $toEmail = "paiboon500@gmail.com";
        // $toEmail = "contact@feelfreetransport.com";
        // Mail::to($toEmail)->send(new EmailController($bookingData));

        return redirect()->route('booking.index')->with('success','Booking created successfully');
    }
}
