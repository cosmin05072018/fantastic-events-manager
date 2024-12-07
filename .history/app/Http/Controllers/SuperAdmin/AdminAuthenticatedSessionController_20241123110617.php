<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticatedSessionController extends Controller
{
    /**
     * Afișează formularul de login pentru admini.
     */
    public function showLoginForm()
    {
        return view('auth.login-admin'); // Asigură-te că acest view există
    }

    /**
     * Procesează autentificarea unui admin.
     */
    public function login(Request $request)
    {
        // Validarea datelor de intrare
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Încercăm autentificarea folosind guardul 'admin'
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // Dacă autentificarea reușește, redirecționăm către ruta /fantastic-events
            return redirect('/fantastic-events');
        }

        // Dacă autentificarea eșuează, redirecționăm înapoi cu o eroare
        return back()->withErrors([
            'email' => 'Autentificare eșuată. Verificați datele introduse.',
        ]);
    }
}

