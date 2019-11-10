<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function assesment(){
        return $this->hasMany('App\Assesment');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
