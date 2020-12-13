<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EceLabController extends Controller
{
    //
    public function index(){
        return view('ecelab.home');
    }
}
