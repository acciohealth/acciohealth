<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable = ['depression', 'anxiety', 'stress', 'score'];

    public function options(){
        return $this->belongsToMany('App\Option');
    }

    public function test(){
        return $this->belongsTo('App\Test');
    }

}
