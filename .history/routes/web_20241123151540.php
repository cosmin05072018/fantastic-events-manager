<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\SuperAdmin\FantasticAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// radacina proiectului
Route::get('/', function () {
    return view('startApp');
})->name('StartApp');;

// pagina in care userul este notificat ca a creat contul si trebuie sa astepte aprobarea noastra
Route::get('/registration/pending', [RegisteredUserController::class, 'pending'])->name('registration.pending');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// SUPER ADMIN
// Route::get('/fantastic-admin', [FantasticAdminController::class, 'index'])->name('admin.dashboard');

Route::get('/fantastic-admin', [FantasticAdminController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware('admin.access');


require __DIR__.'/auth.php';





