<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Atributele care pot fi completate în mod masiv.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'county',
        'company_name',
        'company_cui',
        'manager_name',
        'company_address',
        'email',
        'role',
        'status',
    ];

    /**
     * Atributele care trebuie să fie castate la tipuri native.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'integer',  // Castăm status-ul ca întreg
        'role' => 'string',     // Rolurile sunt string-uri
    ];

    /**
     * Funcție pentru verificarea rolului utilizatorului.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }
}
