<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TouristVisaController extends Controller
{

    function touristvisaview()
    {
        return view('pages.touristvisa');
    }
}
