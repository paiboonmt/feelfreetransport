<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'from',
        'to',
        'journy',
        'vehicle_type',
        'vehicle',
        'passengers',
        'hotel',
        'destination',
        'pick_up_date',
        'pick_up_time',
        'passenger_name',
        'phone',
        'email',
        'remark',
        'status',
        'date',
    ];
}
