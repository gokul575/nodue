<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItLabController extends Controller
{
    //
    public function index(){
        return view('itlab.home');
    }
}
