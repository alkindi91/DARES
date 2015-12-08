<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationHistory extends Model {

    protected $fillable = ['comment'];

    public function step() {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationStep');
    }

    public function registration() {
    	return $this->belongsTo('\Modules\Registration\Entities\Registration');
    }

}