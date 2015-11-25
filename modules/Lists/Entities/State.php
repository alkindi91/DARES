<?php namespace Modules\Lists\Entities;
   
use Illuminate\Database\Eloquent\Model;

/**
 * Lists states class
 */
class State extends Model {
	/** @var string the name of the table that the model fecth records from */
	protected $table = 'lists_states';

    protected $fillable = ['city_id' ,'name'];
    
    public function city() {
    	return $this->belongsTo('\Modules\Lists\Entities\City');
    }

}