<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CseLabController extends Controller
{
    //
    public function index(){
        return view('cselab.home');
    }
}
