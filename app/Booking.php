<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bookings';

    protected $fillable = ['booking_date', 'booking_time', 'user_id', 'hcp_id', 'consultation_id', 'session_id', 'status', 'booking_total'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hcp(){
        return $this->belongsTo(Hcp::class);
    }

    public function consultation(){
        return $this->belongsTo(Consultation::class);
    }
}
