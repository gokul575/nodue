<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeHodController extends Controller
{
    //
    public function index(){
        return view('csehod.home');
    }
}
