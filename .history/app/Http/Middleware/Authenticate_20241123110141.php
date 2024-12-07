<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Verifică dacă cererea provine de la o rută care necesită autentificare admin
        if ($request->is('fantastic-admin*')) {
            // Redirecționează către login-ul adminului, nu cel general
            return route('login-admin');
        }

        // Dacă nu, redirecționează către login-ul general
        return $request->expectsJson() ? null : route('login');
    }
}
