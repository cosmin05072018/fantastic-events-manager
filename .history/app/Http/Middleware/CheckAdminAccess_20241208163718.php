<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminAccess
{
    /**
     * Manejează cererea.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Verificăm dacă utilizatorul este autentificat, are status = 1 și role = 'super-admin'
        if ($user && $user->status === 1) {
            return $next($request);
        }

        // Redirect în caz de acces neautorizat
        return redirect()->route('login')->with('error', 'Acces interzis.');
    }
}
