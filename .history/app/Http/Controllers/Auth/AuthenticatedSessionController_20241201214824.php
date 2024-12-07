<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    // Preluăm emailul din request
    $email = $request->input('email');

    // Căutăm în tabelă dacă există un utilizator cu acest email
    $user = User::where('email', $email)->first();

    // Dacă emailul nu există în tabelă, returnăm un mesaj de eroare specific
    if (!$user) {
        return back()->withErrors(['email' => 'Nu există cont cu aceste date. Vă rugăm să solicitați crearea unuia.']);
    }

    // Verificăm valoarea coloanei `status`
    switch ($user->status) {
        case 0:
            return back()->withErrors(['email' => 'Înregistrarea dvs. a fost deja solicitată. Veți fi notificat odată ce contul dvs. este aprobat.']);
        case 2:
            return back()->withErrors(['email' => 'Înregistrarea dvs. a fost respinsă.']);
    }

    // Continuăm autentificarea dacă emailul și statusul sunt valide
    $request->authenticate();

    // Regenerăm sesiunea după autentificare
    $request->session()->regenerate();

    // Verificăm rolul utilizatorului
    if ($user->role === 'owner') {
        // Redirecționăm super-admin-ul către ruta '/fantastic-admin'
        return redirect()->route('admin.dashboard');
    } elseif (in_array($user->role, ['super-admin', 'user'])) {
        // Preia toți utilizatorii care aparțin aceluiași hotel_id ca utilizatorul curent
        $users = User::where('hotel_id', $user->hotel_id)->get();

        return view('test_users', compact('users'));
    }


    // În cazul unui rol necunoscut, returnăm eroare
    return back()->withErrors(['email' => 'Rolul utilizatorului este invalid.']);
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
