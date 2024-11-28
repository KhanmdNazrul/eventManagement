<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Attendee extends Authenticatable
{
    use HasApiTokens, HasFactory,Notifiable;


    protected $guard = 'attendee';

    protected $fillable = [
        'name',
        'phone',
        'address',
        'photo',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function event(){
        return $this->hasMany(Event::class);
    }
};

