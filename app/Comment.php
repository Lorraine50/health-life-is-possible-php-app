<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'comments';
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replys(){
        return $this->hasMany(Reply::class);
    }
}
