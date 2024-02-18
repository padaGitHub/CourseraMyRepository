<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpFoundation\Response;



class MiddlewareAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->has('submit')){
            return $next($request);
        }
        if($request-> route()->getName() == 'dashboard'){
            return $next($request);
        }
        else{
            return redirect()-> route('login');

        }

        
        
       
        
    }
}
