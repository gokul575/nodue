<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcountsController extends Controller
{
    //
    public function index(){
        return view('accounts.home');
    }
}
