<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\PendingUser;

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
    $pendingUser = PendingUser::where('email', $email)->first();

    // Dacă emailul nu există în tabelă, returnăm un mesaj de eroare specific
    if (!$pendingUser) {
        return back()->withErrors(['email' => 'Nu există cont cu aceste date. Vă rugăm să solicitați crearea unuia.']);
    }

    // Verificăm valoarea coloanei `status`
    switch ($pendingUser->status) {
        case 0:
            return back()->withErrors(['email' => 'Înregistrarea dvs. a fost deja solicitată. Veți fi notificat odată ce contul dvs. este aprobat.']);
        case 1:
            return back()->withErrors(['email' => 'Contul a fost aprobat cu succes.']);
        case 3:
            return back()->withErrors(['email' => 'Înregistrarea dvs. a fost respinsă.']);
    }

    // Continuăm autentificarea dacă emailul și statusul sunt valide
    $request->authenticate();

    // Regenerăm sesiunea după autentificare
    $request->session()->regenerate();

    // Redirecționăm utilizatorul către pagina dorită după autentificare
    return redirect()->intended(RouteServiceProvider::HOME);
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
