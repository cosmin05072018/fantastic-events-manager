<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Manevrează cererea.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Verificăm dacă utilizatorul este autentificat și dacă rolul său se potrivește cu cel dat
        if (Auth::guard('super_admin')->check()) {
            $user = Auth::guard('super_admin')->user();
            if ($user->role === $role) {
                return $next($request);
            }
        }

        // Dacă utilizatorul nu are rolul corect, îl redirecționăm
        return redirect()->route('login-admin');
    }
}
