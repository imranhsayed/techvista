<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequireAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
	    if ( \Auth::check() && \Auth::user()->is_admin) {
		    return $next($request);
	    }

	    // Set the flash message
	    session()->flash( 'error', 'You must be admin to view that resource' );

	    return redirect( '/login' )->with( 'error', 'You must be admin to view that resource' );
    }
}
