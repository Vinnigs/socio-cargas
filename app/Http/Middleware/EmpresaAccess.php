<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmpresaAccess
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
        if(auth()->check() && auth()->user()->empresa){
            return $next($request);
        }

        dd('Acesso não autorizado: você não é empresa.');
    }
}
