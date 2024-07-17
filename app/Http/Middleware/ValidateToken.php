<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidateToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check for the token in the request headers
        $token = $request->header('Authorization');

        // Validate the token
        if ($token !== 'Bearer vg@123') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Assuming you have a user to set
        // For example, get the first user in the database
        $user = User::first();

        // Manually authenticate the user
        if ($user) {
            Auth::login($user);
        }

        return $next($request);
    }
}
