<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::where('ip_address',request()->ip())->first();
        $cart = \Cart::getContent()->count();
        if($user && $cart){
          
            return $next($request); 


        }if($user && !$cart){

            return redirect('/');
        }

        if(!$user){

            return redirect('order/signin');

           
        }
        
    }
}
