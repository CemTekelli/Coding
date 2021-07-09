<?php

namespace App\Http\Middleware;

use Closure;

class realUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = $request->route()->parameters()['id'];
        if ($request->user()->id == $id) {
            return $next($request);
        } else {
            return  redirect()->back();
        }
    }
}
