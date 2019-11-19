<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'consultations';
    protected $fillable = ['c_name', 'c_desc', 'c_price'];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
