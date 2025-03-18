<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminStationController extends Controller
{
    public function index()
    {
        return view('admin.station.index');
    }
}
