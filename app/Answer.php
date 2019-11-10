<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function assesment(){
        return $this->hasMany('App\Assesment');
    }
}
