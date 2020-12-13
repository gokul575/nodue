<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CseHodController extends Controller
{
    //
    public function index(){
        return view('csehod.home');
    }
}
