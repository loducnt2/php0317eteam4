<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function warrantydetail(){
        return $this->hasMany('App\Warrantydetail');
    }
}
