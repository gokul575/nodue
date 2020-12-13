<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        if(Auth::user()->role_id==0){
            $this->redirectTo='/superadmin';
            return $this->redirectTo;

        }
        else if(Auth::user()->role_id==1){
            $this->redirectTo='/admin';
            return $this->redirectTo;



        }else if(Auth::user()->role_id==2){
            $this->redirectTo='/accounts';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==3){
            $this->redirectTo='/sports';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==4){
            $this->redirectTo='/library';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==5){
            $this->redirectTo='/csehod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==6){
            $this->redirectTo='/ecehod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==7){
            $this->redirectTo='/eeehod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==8){
            $this->redirectTo='/mehod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==9){
            $this->redirectTo='/cehod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==10){
            $this->redirectTo='/ithod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==11){
            $this->redirectTo='/cselab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==12){
            $this->redirectTo='/ecelab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==13){
            $this->redirectTo='/eeelab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==14){
            $this->redirectTo='/melab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==15){
            $this->redirectTo='/celab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==16){
            $this->redirectTo='/itlab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==17){
            $this->redirectTo='/fehod';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==18){
            $this->redirectTo='/felab';
            return $this->redirectTo;



        }
        else if(Auth::user()->role_id==19){
            $this->redirectTo='/student';
            return $this->redirectTo;



        }

        else{
            $this->redirectTo='/login';
            return $this->redirectTo;


        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
