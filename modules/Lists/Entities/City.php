<?php namespace Modules\Lists\Entities;
   
use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $fillable = ['country_id' ,'name'];
    
    public function country() {
    	return $this->belongsTo('\Modules\Lists\Entities\Country');
    }
}