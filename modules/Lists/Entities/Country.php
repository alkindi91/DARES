<?php namespace Modules\Lists\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    protected $fillable = ['name' ,'calling_code'];

    protected $table = 'lists_countries';
    
    public function cities() {
    	return $this->hasMany('\Modules\Lists\Entities\City');
    }
}