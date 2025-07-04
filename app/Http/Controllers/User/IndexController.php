<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;


class IndexController extends Controller
{

    function indexview()
    {
        $services = Service::getActiveServices();
        return view('pages.index', compact('services'));
    }
}
