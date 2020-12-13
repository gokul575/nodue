<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeLabController extends Controller
{
    //
    public function index(){
        return view('felab.home');
    }
}
