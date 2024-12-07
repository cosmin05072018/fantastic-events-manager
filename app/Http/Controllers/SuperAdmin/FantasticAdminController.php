<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FantasticAdminController extends Controller
{
    public function index(){

        $users = User::all();
        return view ('superadmin/index', compact('users'));
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Invalidăm sesiunea
        $request->session()->regenerateToken(); // Regenerăm token-ul CSRF
        return redirect('/login'); // Redirecționare către pagina de login
    }
}
