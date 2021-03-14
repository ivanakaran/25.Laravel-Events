<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SignedValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user = $request->user;

        if ($request->hasValidSignature()) {
            return $next($request);
        } else {
            return redirect()->route('new-link', ['user' => $user->id]);
        }

    }
}