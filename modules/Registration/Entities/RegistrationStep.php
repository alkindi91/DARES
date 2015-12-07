<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationStep extends Model {

    protected $fillable = ['name' ,'email_template' ,'sms_template'];

    public function children(){

    	return $this->belongsToMany('\Modules\Registration\Entities\RegistrationStep' ,
    		'registration_step_pivots' ,
    		'parent_id' ,
    		'child_id');
    }



}