<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function assesment(){
        return $this->hasMany('App\Assesment');
    }
}
