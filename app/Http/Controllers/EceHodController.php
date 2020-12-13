<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EceHodController extends Controller
{
    //
    public function index(){
        return view('ecehod.home');
    }
}
