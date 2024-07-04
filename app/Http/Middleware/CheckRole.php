<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (!$request->user()) {
            return redirect()->to(route('home'));
        }

        foreach($roles as $role){
            if($request->user()->hasRole($role)){
                return $next($request);
            }
        }

        return redirect()->to(route('home'));
    }
}
