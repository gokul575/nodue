<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EeeHodController extends Controller
{
    //
    public function index(){
        return view('eeehod.home');
    }
}
