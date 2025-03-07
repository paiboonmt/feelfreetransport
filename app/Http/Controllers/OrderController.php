<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index( Request $request )
    {
        // dump( $request->all() );

        // "form" => "Phuket Airport"
        // "to" => "Bang Rong Pier"
        // "journey" => "One Way"
        // "vehicle_type" => "Standard Car - 3 pax"
        // "vehicle" => "1"
        // "passengers" => "1"
        // "hotel" => "Hotel Name"
        // "destination" => "Hotel name in destination"
        // "pick_up_date" => "2025-03-06"
        // "pick_up_time" => "23:17"
        // "passenger_name" => "Lead Passenger name"
        // "phone" => "22334455"
        // "email" => "dev@test"
        // "remark" => "remark"

        $data = [
            'form' => $request->form,
            'to' => $request->to,
            'journey' => $request->journey,
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
        ];

        return view('order.index',compact('data'));
    }
}
