<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Booking;
use App\Comment;

class User extends Authenticatable
{
    protected $primaryKey = 'id';
    protected $table = 'users';
    
    protected $fillable = [
        'name', 'email', 'password', 'tel_h', 'tel_w', 'tel_c', 'reference', 'dob', 'addr', 'gender',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // relationship with Bookings class
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
}
