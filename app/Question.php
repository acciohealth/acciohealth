<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function test(){
        return $this->belongsTo('App\Test');
    }

    public function measures(){
        return $this->belongsToMany('App\Measure');
    }

    public function options(){
        return $this->belongsToMany('App\Option');
    }
}
