<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticatedSessionController extends Controller
{
    public function login(Request $request)
    {
        // Validarea datelor de intrare
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Încercăm autentificarea folosind guard-ul 'admin'
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // Obținem utilizatorul autentificat
            $user = Auth::guard('admin')->user();

            // Redirecționare pe baza rolului
            switch ($user->role) {
                case 'super_admin':
                    return redirect()->route('/fantastic-admin'); // Dashboard pentru super_admin
                case 'admin':
             // Secțiune pentru admin       return redirect()->route('admin.section');
                case 'writer':
             // Secțiune pentru writer        return redirect()->route('writer.section');
                default:
                    Auth::guard('admin')->logout(); // Logout dacă rolul este invalid
                    return redirect()->route('login-admin')->withErrors([
                        'error' => 'Rol invalid. Contactați administratorul.',
                    ]);
            }
        }

        // Dacă autentificarea eșuează
        return back()->withErrors([
            'error' => 'Date de autentificare invalide. Verificați email-ul și parola.',
        ]);
    }
}
