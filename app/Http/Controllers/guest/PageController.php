<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model\trains;
use Illuminate\Pagination\Paginator;

class PageController extends Controller
{
    function index(){
        return view('home');
    }

    function trains(){
        $trains= train::paginate(10);
        Paginator::useBootstrapFive();
        return view('my_trains', compact('trains'));
    }
}
