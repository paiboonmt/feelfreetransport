<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index( Request $request )
    {
        $data = [
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
        ];

        return view('order.index',compact('data'));
    }
}
