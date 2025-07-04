<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TourPackageController extends Controller
{

    function tourpackageview()
    {
        return view('pages.tourpackage');
    }
}
