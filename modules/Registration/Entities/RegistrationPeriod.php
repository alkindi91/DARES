<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationPeriod extends Model {

    protected $fillable = ['name' ,'start_at' ,'finish_at'];

    public function year() {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationYear' ,'registration_year_id');
    }
}