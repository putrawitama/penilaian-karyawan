<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
