<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserStatus
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
        // Check if the user is authenticated
        if (auth()->check()) {
            $user = auth()->user();

            // If the user is a super_admin, allow access
            if ($user->status === 'super_admin') {
                return $next($request);
            }

            // If the user's status is not approved, redirect to the pending approval page
            if ($user->status !== 'approved') {
                return redirect()->route('pending_approval');
            }
        }
    }
}


// if (auth()->check() && auth()->user()->role !== 'super_admin') {
//     abort(403, 'Unauthorized');
// }