<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departament;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'county',
        'company_name',
        'company_cui',
        'manager_name',
        'company_address',
        'email',
        'password',
        'status',
        'role',
        'super_admin_id',
        'department_id',
    ];

    public function superAdmin()
    {
        return $this->belongsTo(User::class, 'super_admin_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
