<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * Tabela asociată modelului.
     *
     * @var string
     */
    protected $table = 'admins';

    /**
     * Atribute care pot fi completate direct.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'status',
        'last_login_at',
        'last_login_ip',
    ];

    /**
     * Atribute ascunse în serializări.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Setează parola hash-uită.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
