<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * Get the users assigned to the department.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'department_id');
    }
}
