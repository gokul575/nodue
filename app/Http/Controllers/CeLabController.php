<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeLabController extends Controller
{
    //
    public function index(){
        return view('celab.home');
    }
}
