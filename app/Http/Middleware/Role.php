<?php

namespace App\Http\Middleware;

use Closure;

class Role 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|array $role
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Check for unauthorized users.
        if(!auth()->check()){
            return response()->errorUnauthorized();
        }

        $user = auth()->user();

        // always pass a user if he's admin.
        if($user->role->slug === 'admin'){
            return $next($request);
        }

        // check for a invalid role.
        foreach ($roles as $role) {
            if ($user->role->slug === $role) {
                return $next($request);
            }
        }

        return response()->errorUnauthorized();
    }
}
