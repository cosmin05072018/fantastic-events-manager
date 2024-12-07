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
        return view('superAdmin.usermanagement.blade', compact('users'));
    }
}
