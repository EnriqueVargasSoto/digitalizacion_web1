<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //

    public function index(){
        return view('web.pages.index');
    }

    public function aboutUS(){
        return view('web.pages.about-us');
    }
}
