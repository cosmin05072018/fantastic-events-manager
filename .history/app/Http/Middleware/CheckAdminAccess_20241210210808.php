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

        // Verificăm dacă utilizatorul este autentificat și are status = 1
        if (!$user || $user->status !== 1) {
            return redirect()->route('login')->with('error', 'Acces interzis.');
        }

        // Verificăm rolurile în funcție de ruta curentă
        $currentRoute = $request->path(); // Obține ruta curentă, ex: 'fantastic-admin'

        if ($currentRoute === 'fantastic-admin' && $user->role !== 'owner') {
            return redirect()->route('login')->with('error', 'Acces permis doar pentru owner.');
        }

        if ($currentRoute === 'fantastic-admin/management-hotel' && $user->role !== 'super-admin') {
            return redirect()->route('login')->with('error', 'Acces permis doar pentru super-admin.');
        }

        // Acces permis
        return $next($request);
    }
}
