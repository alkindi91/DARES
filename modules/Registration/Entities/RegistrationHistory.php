<?php namespace Modules\Registration\Entities;
   
use Illuminate\Database\Eloquent\Model;

class RegistrationHistory extends Model {

    protected $fillable = ['comment'];

    public function step()
    {
    	return $this->belongsTo('\Modules\Registration\Entities\RegistrationStep', 'registration_step_id');
    }

    public function registration()
    {
    	return $this->belongsTo('\Modules\Registration\Entities\Registration', 'registration_id');
    }

    public function creator()
    {
    	return $this->belongsTo('\Modules\Users\Entities\User', 'created_by');
    }

}