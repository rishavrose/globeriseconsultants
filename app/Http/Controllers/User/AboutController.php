<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{

    function aboutview()
    {
        return view('pages.about');
    }
}
