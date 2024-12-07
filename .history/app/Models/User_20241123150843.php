<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

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
        'password',
        'role',
        'status',
    ];

    /**
     * Atributele care trebuie ascunse în array-uri.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atributele care trebuie să fie castate la tipuri native.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'integer', // Castăm status-ul ca întreg
        'role' => 'string',    // Rolurile sunt string-uri
    ];

    /**
     * Setează parola criptată automat.
     *
     * @param string|null $value
     * @return void
     */
    public function setPasswordAttribute(?string $value): void
    {
        $this->attributes['password'] = $value ? Hash::make($value) : null;
    }

    /**
     * Verifică dacă utilizatorul are un anumit rol.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }

    /**
     * Verifică dacă utilizatorul are o parolă setată.
     *
     * @return bool
     */
    public function hasPassword(): bool
    {
        return !is_null($this->password);
    }
}
