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
        // Verificăm dacă utilizatorul este autentificat folosind guard-ul 'admin'
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();

            // Verificăm dacă rolul utilizatorului se potrivește cu cel necesar
            if ($user->role === $role) {
                return $next($request);
            }

            // În cazul în care rolul nu corespunde, returnăm eroare 403
            abort(403, 'Nu aveți permisiunea de a accesa această pagină.');
        }

        // Dacă utilizatorul nu este autentificat, redirecționăm către login-admin
        return redirect()->route('login-admin')->withErrors([
            'error' => 'Trebuie să fiți autentificat pentru a accesa această pagină.',
        ]);
    }
}
