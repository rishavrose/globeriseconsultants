<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostLandingController extends Controller
{

    function postlandingview()
    {
        return view('pages.postlanding');
    }
}
