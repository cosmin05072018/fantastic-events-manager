<?php
namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login-admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autentificare folosind guardul 'admin'
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // Verificăm rolul adminului
            $user = Auth::guard('admin')->user();
            if ($user->role === 'admin' || $user->role === 'super-admin') {
                return redirect()->route('admin.dashboard');
            }
        }

        // Dacă autentificarea a eșuat
        return back()->withErrors(['email' => 'Autentificare eșuată.']);
    }
}
