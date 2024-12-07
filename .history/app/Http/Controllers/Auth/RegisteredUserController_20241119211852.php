<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'county' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'company_cui' => ['required', 'string', 'max:20', 'unique:users,company_cui'],
            'manager_name' => ['required', 'string', 'max:255'],
            'company_address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email']
        ]);

        $user = User::create([
            'county' => $request->county,
            'company_name' => $request->company_name,
            'company_cui' => $request->company_cui,
            'manager_name' => $request->manager_name,
            'company_address' => $request->company_address,
            'email' => $request->email,
            'status' => 0,
        ]);

        // Verificăm dacă utilizatorul a fost creat cu succes
        if ($user) {
            $user->save();

            // Redirecționăm utilizatorul către o pagină de confirmare
            return redirect()->route('registration.pending')->with('status', 'Înregistrarea dvs. este în așteptare. Veți fi notificat odată ce contul dvs. este aprobat.');
        } else {
            dd('success');
            // În cazul în care crearea contului a eșuat, redirecționăm utilizatorul înapoi cu un mesaj de eroare
            return redirect()->back()->withErrors(['error' => 'A apărut o eroare în timpul înregistrării. Vă rugăm să încercați din nou.']);
        }
    }

    public function pending()
    {
        return view('auth.pending');
    }
}
