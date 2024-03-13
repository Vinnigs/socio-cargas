<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Caminhoneiro;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && !auth()->user()->admin && !auth()->user()->caminhoneiro && !auth()->user()->empresa){

            return $next($request);

        }elseif(auth()->check() && auth()->user()->caminhoneiro){

            $caminhoneiro = Caminhoneiro::where('user_id', auth()->user()->id)->firstOrFail();
            if($caminhoneiro->status != 1){
                return $next($request);
            }          
        }
        return response('Não autorizado', 403);
    }
}
