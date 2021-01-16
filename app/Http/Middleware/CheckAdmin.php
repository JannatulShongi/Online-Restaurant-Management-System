<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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


        if(auth()->user()->role=='admin')
        {
            return $next($request);
        }else
        {

            Auth::logout();
            return redirect()->back()->with('message','Permission deny.');
        }


    }
}
