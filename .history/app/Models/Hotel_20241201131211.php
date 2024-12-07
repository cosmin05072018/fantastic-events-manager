<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotels'; // Numele tabelului asociat (opțional)

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'client_id',
    ];

    /**
     * Relația dintre hotel și manager.
     * Un hotel are un singur manager.
     */
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    /**
     * Relația dintre hotel și angajați.
     * Un hotel poate avea mai mulți angajați.
     */
    public function employees()
    {
        return $this->hasMany(User::class, 'hotel_id');
    }
}
