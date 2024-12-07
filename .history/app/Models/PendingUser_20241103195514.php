<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingUser extends Model
{
    use HasFactory;

    /**
     * Tabela asociată modelului.
     *
     * @var string
     */
    protected $table = 'pending_users';

    /**
     * Atributele care pot fi asignate în mod masiv.
     *
     * @var array
     */
    protected $fillable = [
        'county',
        'company_name',
        'company_cui',
        'manager_name',
        'company_address',
        'email',
        'status',
    ];

    /**
     * Atributele implicite pentru model.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 0,
    ];
}
