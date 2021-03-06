<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }

    public function image(){
        return $this->hasMany(Image::class);
    }

    /*public function supplier(){
        return $this->belongsTo(Supplier::class);
    }*/

}
