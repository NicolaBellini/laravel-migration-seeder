<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model\trains;

class PageController extends Controller
{
    function index(){
        return view('home');
    }

    function trains(){
        $trains= train::all();
        return view('my_trains', compact('trains'));
    }
}
