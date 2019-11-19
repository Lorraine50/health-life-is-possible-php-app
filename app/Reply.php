<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = "replies";
    public $primaryKey = "id";
    
    public function hcp(){
        return $this->belongsTo(Hcp::class);
    }

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
