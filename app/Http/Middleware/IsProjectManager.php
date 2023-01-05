<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsProjectManager
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
        // return $next($request);

        if(auth()->user()->is_project_manager == 1){
            return $next($request);
        }
   
        return redirect('project_manager/home')->with('error',"You don't have admin access.");


    }
}
