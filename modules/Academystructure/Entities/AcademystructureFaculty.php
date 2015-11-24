<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class AcademystructureFaculty extends Model {

    protected $fillable = ["name"];
	
	public function years() {
    	return $this->hasMany('\Modules\Academystructure\Entities\AcademystructureYear' ,'faculty_id');
    }
	
	

}