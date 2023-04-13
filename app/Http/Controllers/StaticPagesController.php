<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function services(){
        return view('front.services');
    }

    public function contact(){
        return view('front.contact');
    }

    public function dateBookings(){
        return view('front.bookings');
    }

    public function cookies(){
        return view('front.cookies');
    }
}
