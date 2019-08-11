<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdmin
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (!isset($user)) {
            return redirect(route('login'));
        }

        if (!$user->isAdmin()) {
            return redirect(route('home'));
        }

        return $next($request);
    }
}
