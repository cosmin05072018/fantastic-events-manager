<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    // Metoda pentru a lista utilizatorii
    public function index()
    {
        // Preluăm toți utilizatorii din baza de date
        $users = User::all();

        // Returnăm view-ul cu lista utilizatorilor
        return view('superAdmin/usermanagement', compact('users'));
    }

    public function destroy($userId)
    {
        dd(1);
        // Găsește utilizatorul pe baza ID-ului
        $user = User::findOrFail($userId);

        // Șterge utilizatorul
        $user->delete();

        // Redirectează înapoi cu un mesaj de succes
        return redirect()->route('admin.users-management')->with('success', 'Utilizatorul a fost șters cu succes.');
    }
}
