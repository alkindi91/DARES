<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class AcademystructureYear extends Model {

    protected $fillable = ['name' , 'faculty_id'];
	
	public function years() {
    	return $this->hasMany('\Modules\Academystructure\Entities\AcademystructureTerm' ,'term_id');
    }

}