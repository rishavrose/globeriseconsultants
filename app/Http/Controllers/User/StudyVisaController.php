<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StudyVisaController extends Controller
{

    function studyvisaview()
    {
        return view('pages.studyvisa');
    }
}
