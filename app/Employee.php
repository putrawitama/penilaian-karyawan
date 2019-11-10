<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function grade(){
        return $this->belongsTo('App\Grade');
    }

    public function answer(){
        return $this->hasMany('App\Answer');
    }
}
