<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationStepNote extends Model {

    protected $fillable = ['content'];

    public function step() {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationStep' ,'registration_step_id');
    }
}