<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Booking;
use App\Comment;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Hcp extends Authenticatable
{
    protected $primaryKey = 'id';
    protected $table = 'hcps';
    // for the guard 
    protected $guard = 'hcp';
    

    protected $fillable = ['hcp_name', 'hcp_spec', 'hcp_email', 'hcp_password', 'hcp_pic'];
    protected $hidden = [
        'hcp_password', 'remember_token',
    ];

    
    // relationship with Bookings class
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    // relationship with comments 
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    // function needed for override the hcp_password to default laravel 'password' column
    public function getAuthPassword () {
        return $this->hcp_password;
    }
}
