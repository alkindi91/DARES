<?php namespace Modules\Academystructure\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model {

    protected $fillable = ["name"];
	protected $table = 'academystructure_faculties';
	
	public function years() {
    	return $this->hasMany('\Modules\Academystructure\Entities\Year' ,'faculty_id');
    }
	
}