<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        return view('home');
    }

    function trains(){
        return view('my_trains');
    }
}
