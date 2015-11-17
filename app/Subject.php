<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['title'];

    public function user() {
    	return $this->belongsTo('App\User' ,'user_id');
    }
}
