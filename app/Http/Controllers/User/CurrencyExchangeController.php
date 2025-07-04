<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CurrencyExchangeController extends Controller
{

    function currencyexchangeview()
    {
        return view('pages.currencyexchange');
    }
}
