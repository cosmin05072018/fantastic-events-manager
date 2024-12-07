<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Models\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserAccepted;

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

        // Inserăm datele în tabela "hotels"
        $hotel = new Hotel();
        $hotel->name = $user->hotel_name; // Preluăm numele hotelului din tabela users
        $hotel->address = $user->company_address; // Preluăm adresa companiei din tabela users
        $hotel->save();

        // Actualizăm statusul și rolul utilizatorului
        $user->status = 1; // 1 = Aprobat
        $user->role = 'super-admin';
        $user->hotel_id = $hotel->id; // Asociem utilizatorul cu ID-ul hotelului
        $user->save();

        // Trimitem email utilizatorului
        Mail::to($user->email)->send(new UserAccepted($user));

        // Redirectăm înapoi cu un mesaj de succes
        return redirect()->back()->with('success', 'Utilizatorul a fost aprobat și hotelul a fost adăugat.');
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
