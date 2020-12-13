<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class cselab
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        if(Auth::user()->role_id==0){

            return redirect()->route('superadmin');

        }
        if(Auth::user()->role_id==1){

return redirect()->route('admin');
        }
        if(Auth::user()->role_id==2){

return redirect()->route('accounts');
        }
        if(Auth::user()->role_id==3){

            return redirect()->route('sports');

        }
        if(Auth::user()->role_id==4){

            return redirect()->route('library');

        }
        if(Auth::user()->role_id==5){

            return redirect()->route('csehod');

        }
        if(Auth::user()->role_id==6){

            return redirect()->route('ecehod');

        }
        if(Auth::user()->role_id==7){

            return redirect()->route('eeehod');

        }
        if(Auth::user()->role_id==8){

            return redirect()->route('mehod');

        }
        if(Auth::user()->role_id==9){

            return redirect()->route('cehod');

        }
        if(Auth::user()->role_id==10){

            return redirect()->route('ithod');

        }
        if(Auth::user()->role_id==11){

            return $next($request);
            
        }
        if(Auth::user()->role_id==12){

            return redirect()->route('ecelab');

        }
        if(Auth::user()->role_id==13){

            return redirect()->route('eeelab');

        }
        if(Auth::user()->role_id==14){

            return redirect()->route('melab');

        }
        if(Auth::user()->role_id==15){

            return redirect()->route('celab');

        }
        if(Auth::user()->role_id==16){

            return redirect()->route('itlab');

        }
        if(Auth::user()->role_id==17){

            return redirect()->route('fehod');

        }
        if(Auth::user()->role_id==18){

            return redirect()->route('felab');

        }
        if(Auth::user()->role_id==19){

            return redirect()->route('student');

        }

    }
}
