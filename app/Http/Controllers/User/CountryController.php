<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CountryController extends Controller
{
    function countryview()
    {
        return view('pages.countries');
    }

}