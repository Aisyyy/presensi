<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$Role)
    {
        // $user = $request->user();
        if(in_array($request->users()->Role,$Role)){
            return $next($request);
        }

        return redirect('/');
    }
}
