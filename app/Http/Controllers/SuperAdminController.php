<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class SuperAdminController extends Controller
{
    //
    public function index(){
        return view('superadmin.home');
    }
    public function usermanagement(){
        return view('superadmin.usermanagement');
    }
}
