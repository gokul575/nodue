<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeHodController extends Controller
{
    //
    public function index(){
        return view('mehod.home');
    }
}
