<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestimonialController extends Controller
{

    function testimonialview()
    {
        return view('pages.testimonial');
    }
}
