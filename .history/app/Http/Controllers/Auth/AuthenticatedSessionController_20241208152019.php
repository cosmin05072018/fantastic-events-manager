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
            $users = User::where('hotel_id', $user->hotel_id)
                ->with(['department', 'hotel'])
                ->get();

            // Extrage doar ID-urile utilizatorilor pentru a le trimite ca parametri
            $userIds = $users->pluck('id')->toArray();

            // Redirecționează la ruta 'sameHotelView' cu ID-urile utilizatorilor și hotel_id
            return redirect()->route('admin.sameHotelView', [
                'hotel_id' => $user->hotel_id,  // Adaugă hotel_id în parametri
                'user_ids' => implode(',', $userIds)  // Trimite ID-urile utilizatorilor
            ]);
        }

        // În cazul unui rol necunoscut, returnăm eroare
        return back()->withErrors(['email' => 'Rolul utilizatorului este invalid.']);
    }

    public function sameHotelView(Request $request)
    {
        // Preia parametrii din URL
        $hotel_id = $request->route('hotel_id'); // Preia hotel_id din ruta
        $userIds = explode(',', $request->query('user_ids')); // Preia user_ids din query string

        if (empty($userIds)) {
            return redirect()->back()->with('error', 'No users found!');
        }

        // Obține utilizatorii pe baza ID-urilor
        $users = User::whereIn('id', $userIds)
            ->with(['department', 'hotel'])
            ->get();

        // Returnează vizualizarea cu utilizatorii și hotel_id
        return view('sameHotelView', compact('users', 'hotel_id'));
    }


    public function usersFromSameHotel()
    {
        // Preia utilizatorul autentificat
        $user = Auth::user();

        // Verifică dacă utilizatorul are un hotel_id atribuit
        if (!$user->hotel_id) {
            return redirect()->back()->with('error', 'Nu aveți un hotel asociat.');
        }

        // Preia toți utilizatorii care aparțin aceluiași hotel_id
        $users = User::where('hotel_id', $user->hotel_id)->get();

        // Returnează un view cu lista utilizatorilor
        return view('users.same_hotel', compact('users'));
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