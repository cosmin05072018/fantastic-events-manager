<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function accept(User $user)
    {
        $user->update(['status' => 1]);
        return redirect()->route('admin.users-management')->with('success', 'Utilizatorul a fost acceptat.');
    }

    public function acceptUser($id)
{
    // Găsim utilizatorul după ID
    $user = User::findOrFail($id);

    // Actualizăm statusul utilizatorului
    $user->status = 1; // 1 = Aprobat
    $user->save();

    // Trimitem email utilizatorului
    Mail::to($user->email)->send(new UserAccepted($user));

    // Redirectăm înapoi cu un mesaj de succes
    return redirect()->route('admin.users.index')->with('success', 'Utilizatorul a fost aprobat și notificat prin email.');
}


    public function destroy($userId)
    {
        // Găsește utilizatorul pe baza ID-ului
        $user = User::findOrFail($userId);

        // Șterge utilizatorul
        $user->delete();

        // Redirectează înapoi cu un mesaj de succes
        return redirect()->back();
    }
}
