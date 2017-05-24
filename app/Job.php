<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function applications(){
    	return $this->hasMany('App\Application');
    }


    public function user(){
    	return $this->belongsTo('App\User');
    }

}
