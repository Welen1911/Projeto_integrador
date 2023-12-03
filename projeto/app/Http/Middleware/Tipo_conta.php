<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Tipo_conta
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
        if (isset(auth()->user()->tipo_conta)) {
            return $next($request);
        } else {
            return redirect()->route('tipo_conta');
        }
    }
}
