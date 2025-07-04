<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FlightTicketController extends Controller
{

    function flightticketview()
    {
        return view('pages.flightticket');
    }
}
