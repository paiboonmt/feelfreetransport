<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStationController extends Controller
{
    public function index()
    {   
        $title = 'Station List';
        return view('admin.station.index',['title' => $title]);
    }

    public function create()
    {
        $title = 'Add Station';
        return view('admin.station.create',['title' => $title]);
    }
}
