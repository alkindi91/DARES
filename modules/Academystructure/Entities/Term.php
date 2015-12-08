<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Term extends Model {

   	protected $fillable = ["name" , 'year_id'];
	
	protected $table = 'academystructure_terms';
		
	public function subjects() {
    	return $this->hasMany('\Modules\Academystructure\Entities\Subject' ,'sub_id');
    }	
		
	public function Departments() {
    	return $this->hasMany('\Modules\Academystructure\Entities\Department' ,'sub_id');
    }

}