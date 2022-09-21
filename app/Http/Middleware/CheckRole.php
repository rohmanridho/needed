<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $roles = [
            'admin' => [1],
            'employer' => [1, 2],
            'job seeker' => [3]
        ];
        
        if (!in_array(auth()->user()->roles_id, $roles[$role])) {
            return abort(403);
            // return redirect('/');
        }
        
        return $next($request);
    }
}