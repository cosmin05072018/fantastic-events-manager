<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class FantasticAdminController extends Controller
{
    public function index(){

        $users = User::all();
        dd($users);
        return view ('superadmin/index', compact('data'));
    }
}
