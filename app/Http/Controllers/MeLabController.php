<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeLabController extends Controller
{
    //
    public function index(){
        return view('melab.home');
    }
}
