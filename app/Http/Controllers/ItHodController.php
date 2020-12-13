<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItHodController extends Controller
{
    //
    public function index(){
        return view('ithod.home');
    }
}
