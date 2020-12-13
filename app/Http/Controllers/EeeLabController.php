<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EeeLabController extends Controller
{
    //
    public function index(){
        return view('eeelab.home');
    }
}
