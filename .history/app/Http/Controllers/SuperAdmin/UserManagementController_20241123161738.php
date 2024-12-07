<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    // Metoda pentru a lista utilizatorii
    public function index()
    {
        // Preluăm toți utilizatorii din baza de date
        $users = User::all();

        // Returnăm view-ul cu lista utilizatorilor
        return view('admin.users', compact('users'));
    }
}
