<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeHodController extends Controller
{
    //
    public function index(){
        return view('fehod.home');
    }
}
